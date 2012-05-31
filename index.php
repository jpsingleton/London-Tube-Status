<?php

	// Pragmatic tube status XSLT v3

	// Copyright James Singleton 2012 (unop.co.uk)
	// Licensed under a Creative Commons Attribution 3.0 Unported License.
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Pragmatic Tube Status</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<style type="text/css">
body {color: #FFF; background: #333;}
a {color: #FFF;}
table {border-collapse:collapse; width:100%;}
table, th, td {border: 2px solid white;}
th {color: #EEE; background: #111;}
.l1 {color: #FFF; background: #AE6118;}
.l2 {color: #FFF; background: #E41F1F;}
.l3 {color: #FFF; background: #009FE0;}
.l4 {color: #FFF; background: #8F989E;}
.l5 {color: #FFF; background: #000000;}
.l6 {color: #FFF; background: #0450A1;}
.l7 {color: #113B92; background: #F8D42D;}
.l9 {color: #FFF; background: #00A575;}
.l8 {color: #113B92; background: #E899A8;}
.l11 {color: #FFF; background: #893267;}
.l12 {color: #113B92; background: #70C3CE;}
.l81 {color: #FFF; background: #00BBB4;}
.l82 {color: #FFF; background: #F86C00;}
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
