<?php
	// Pragmatic tube status XSLT v4
	// James Singleton 2015 (unop.uk)
	// Licensed under the MIT License
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
<title>Tube Status</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Tube Status">
<meta name="description" content="Pragmatic Tube Status">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@shutdownscanner">
<meta name="twitter:creator" content="@shutdownscanner">
<meta name="twitter:title" content="Tube Status">
<meta name="twitter:description" content="Pragmatic Tube Status">
<meta name="twitter:image" content="https://unop.uk/tube/icons/android-icon-192x192.png">
<meta property="og:title" content="Tube Status">
<meta property="og:type" content="website">
<meta property="og:description" content="Pragmatic Tube Status">
<meta property="og:image" content="https://unop.uk/tube/icons/android-icon-192x192.png">
<meta property="og:url" content="https://unop.uk/tube">
<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#894E24">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="theme-color" content="#894E24">
<style type="text/css">
body {color: #FFF; background: #333; font-family: New Johnson, Arial, Helvetica;}
a {color: #FFF;}
table {border-collapse:collapse; width:100%;}
table, th, td {border: 2px solid white;}
th {color: #EEE; background: #111;}
.l1 {color: #FFF; background: #894E24;}
.l2 {color: #FFF; background: #DC241F;}
.l7 {color: #000; background: #FFCE00;}
.l9 {color: #FFF; background: #007229;}
.l8 {color: #000; background: #D799AF;}
.l4 {color: #FFF; background: #6A7278;}
.l11 {color: #FFF; background: #751056;}
.l5 {color: #FFF; background: #000000;}
.l6 {color: #FFF; background: #0019A8;}
.l3 {color: #000; background: #00A0E2;}
.l12 {color: #000; background: #76D0BD;}
.l82 {color: #000; background: #E86A10;}
.l83 {color: #FFF; background: #0019A8;}
.l81 {color: #000; background: #00AFAD;}
</style>
</head>
<body>
<?php
	// Load the XML source
	$xml = new DOMDocument;
	$xml->load("http://cloud.tfl.gov.uk/TrackerNet/LineStatus");

	// Load the XSLT
	$xsl = new DOMDocument;
	$xsl->load('main.xsl');

	// Configure the transformer
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl); // attach the XSLT
	
	// Do the transform
	echo $proc->transformToXML($xml);

	// Write date to page
	date_default_timezone_set('Europe/London');
	echo date('l jS \of F Y h:i:s A');
?> 
</body>
</html>
