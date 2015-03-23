<?php

$xml_string = 'http://domain.com/sitemap.xml';

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
	
	echo "<p>URL: $link - Likes: $lval </p>";

}