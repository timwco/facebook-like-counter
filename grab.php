<?php
	$url = $_GET['url'];
	$urlfinal = "http://$url/sitemap.xml";
?>

<table id="demo">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Total "Like" Count</th>
        </tr>
    </thead>
    <tbody>
		<?php

		$xml_string = $urlfinal;
		
		//load the xml string using simplexml
		$xml = simplexml_load_file($xml_string);
		
		//loop through the each node of user
		$results = array();
		
		foreach($xml->url as $url){
		
			$link = $url->loc;
		
			$facebook = 'http://api.facebook.com/method/fql.query?query=';
			$encode = urlencode("select total_count from link_stat where url =\"$link\"");
			
			$fburl = $facebook . $encode;
			
			// Run cURL
			$ch = curl_init($fburl);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			$cres = curl_exec($ch);
			curl_close($ch);
			
			$dres = new DomDocument();
			$dres->loadXML($cres);
			
			$fres = $dres->getElementsByTagName('total_count');
			
			$lval = (int)$fres->item(0)->nodeValue;
			
			echo "<tr><td><a target=\"_blank\" href=\"$link\">$link</a></td><td>$lval</td></tr>";
		
		}
		?>
    </tbody>
</table>