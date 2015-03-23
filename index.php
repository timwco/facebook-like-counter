<!doctype html>
<html lang="en">
<head>
    <title>Facebook Output</title>
    
    <link href="includes/styles.css" rel="stylesheet" type="text/css" />
    <link href="includes/jquery-wijmo.css" rel="stylesheet" type="text/css" />
    <link href="includes/jquery.wijmo-open.1.0.0.css" rel="stylesheet" type="text/css" />
    
    <!-- Script Files (libraries, plugins etc) -->
    <script src="includes/jquery-1.4.3.min.js" type="text/javascript"></script>
    <script src="includes/jquery-ui-1.8.6.custom.min.js" type="text/javascript"></script>
    <script src="includes/main-scripts.js" type="text/javascript"></script>

    <script src="includes/jquery.glob.min.js" type="text/javascript"></script>
    <script src="includes/jquery.mousewheel.min.js" type="text/javascript"></script>

    <script src="includes/jquery.wijmo-open.1.0.0.min.js" type="text/javascript"></script>
    <script src="includes/jquery.wijmo.wijpager.js" type="text/javascript"></script>
    <script src="includes/jquery.wijmo.wijdatasource.js" type="text/javascript"></script>
    <script src="includes/jquery.wijmo.wijgrid.js" type="text/javascript"></script> 

</head>
<body>
    <div id="container">
    	
    	<h1><a href="index.php">Facebook "LIKE" Aggregator</a></h1>
    	
		<form id="urlForm">
			<input class="txt" type="text" name="url" value="Enter your domain name here (ex. whatever.com* )" onblur="if(this.value == ''){this.value= this.defaultValue;}" onfocus="if(this.value == this.defaultValue){this.value='';}" />
			<input class="send" type="submit" name="submit" value="Submit" />
		</form>
		<small>* domain must have sitemap.xml file in root directory</small>
    
    	<div id="results"></div>    
	        
    </div>
</body>
</html>
