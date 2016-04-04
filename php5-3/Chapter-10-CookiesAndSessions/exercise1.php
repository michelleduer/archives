<?php

// Write a script with cookies to remember how long ago a visitor first visited a page. 
// Display the value in minutes and seconds 

//set up a hidden value to store the visitor's time, display it upon the next browser refresh
//TODO: replace the previous visitor's time with the current visitor's time

// page display parameters
if (!(isset($_COOKIE["visit"]))) {
	setcookie("visit", time(), time() + 60 * 60 * 24 * 365, "/", "");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>First Visit</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>

		<h2>First Visit:</h2>
<?php
if (isset($_COOKIE["visit"])) {
	$elapsedTime = time() - $_COOKIE["visit"];
	$minutes = (int) $elapsedTime/60;
	$seconds = $elapsedTime % 60;
?>
		<p>The first visit was <?php echo $minutes . " minutes and " . $seconds . " seconds ago.<br>"; ?></p>

<?php 
} else { 
?>
		<p>Thanks for visiting for the first time.</p>
<?php 
} 
?>
	</body>
</html>
