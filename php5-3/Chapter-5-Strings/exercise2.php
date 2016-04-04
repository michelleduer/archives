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

$originalText = "Give me PADDING.";
 
$desiredLength = 40;
$newText = '';

if (strlen($originalText >= $desiredLength)) {
	$newText = $originalText;
} else {
	$padding = $desiredLength - strlen($originalText);
	$newText = $originalText;
}




?>
		
		<h2>Original Text:</h2>
		<pre><?php printf($originalText) ?></pre>

		<h2>Padded Text (note: highlight text to see padding):</h2>
		<pre><?php printf("%-{$padding}s", "$newText") ?></pre>

	</body>
</html>
