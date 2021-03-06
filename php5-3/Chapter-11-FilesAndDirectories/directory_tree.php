<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Listing Directory Contents</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>

<?php

$dirPath = "sample_directory"; // Must add directory path here for code to work

function traverseDir($dir) {
	echo "<h2>Listing $dir ...</h2>";
	if (!($handle = opendir($dir))) die("Cannot open $dir.");

	$files = [];

	while ($file = readdir($handle)) {
		if ($file != "." && $file != "..") {
			if (is_dir($dir . "/" . $file)) $file .= "/";
			$files[] = $file;
		}
	}

	sort($files);
	echo "<ul>";
	foreach($files as $file) echo "<li>$file</li>";
	echo "</ul>";

	foreach ($files as $file) {
		if (substr($file, -1) == "/" ) traverseDir("$dir/" . substr($file, 0, -1));
	}

	closedir($handle);
}

traverseDir($dirPath);

?>
	</body>
</html>

