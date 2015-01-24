<?php

// if, elseif, else statement
if ($userAction == "open") {
	// Open the file
	print "Open file<br/>";
} elseif ($userAction == "save") {
	// Save the file
	print "Save file<br/>";
} elseif ($userAction == "close") {
	// Close the file
	print "Close file<br/>";
} elseif ($userAction == "logout") {
	// Log the user out
	print "Log user out<br/>";
} else {
	print "Please choose an option<br/>";
}

// the above example written with swtich
switch ($userAction) {
	case "open";
		// Open the file
		print "Open file<br/>";
		break;
	case "save";
		// Save the file
		print "Save file<br/>";
		break;
	case "close";
		// Close the file
		print "Close file<br/>";
		break;
	case "logout";
		// Log the user out
		print "Log user out<br/>";
		break;
	default:
		print "Please choose an option<br/>";
}

// ternary operator
$widgets = 23;
$plenty = "We have plenty of widgets in stock.<br/>";
$few = "Less than 10 widgets left. Time to order some more!<br/>";
echo ($widgets >= 10) ? $plenty : $few;

?>
