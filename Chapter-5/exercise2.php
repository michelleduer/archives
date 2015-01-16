<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Emulating strpad() Function</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Emulating strpad() Function</h1>

<?php

// a script that emulates the str_pad($myString, $desiredLength) function AND dispaly the original and padded string
// i.e. take a string, add space chars to the right until string reaches desired length

$originalText = "More padding -->";
 
$desiredLength = 40;
$newText = '';
$marker = 0;



?>
		
		<h2>Original Text:</h2>
		<pre><?php echo $originalText ?></pre>

		<h2>Padded Text:</h2>
		<pre><?php echo $newText ?></pre>

	</body>
</html>
