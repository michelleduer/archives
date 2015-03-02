<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>File Finder</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>

		<h1>File Finder</h1>

<?php

// Create an app that finds a specific directory (not files) by name when provided a top-level directory to search within.
// The App must look through the top-level directory and all the sub-directories

define("PATH_TO_DIRECTORY", "sample_directory");

if (isset($_POST["posted"])) {
	$fileName = isset($_POST["fileName"]) ? $_POST["fileName"] : "";

	echo "<p>Searching for '$fileName' in '" . PATH_TO_DIRECTORY . "' ...</p>";

	$directories = [];

	findDirectory(PATH_TO_DIRECTORY, $fileName, $directories);

	if ($directories) {
		echo "<h2>Matching File Names:</h2>\n<ul>\n";
		foreach($directories as $directory) {
			echo ("<li>$directory</li>");
			echo "</ul>\n";
		}
	} else {
		echo "<p>File not found.</p>";
	}
}

function findDirectory($startFile, $findFile, &$directories) {
	if(!($handle = opendir($startFile))) die("Cannot open $startFile.");

	while ($entry = readdir($handle)) {
		if (is_dir("$startFile/$entry")) {
			if ($entry != "." && $entry != "..") {
				if ($entry == $findFile) $directories[] = "$startFile/$entry";

				findDirectory("$startFile/$entry", $findFile, $directories);
			}
		}
	}
	closedir($handle);
}

?>

		<form method="post" action="">
			<div>
				<input type="hidden" name="posted" value="true" />
				<label>What is the filename?</label>
				<input type="text" name="fileName"/>
				<input type="submit" name="search" value="Search"/>
			</div>
		</form>
	</body>
</html>
