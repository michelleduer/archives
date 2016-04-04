<?php

// Create a script that displays a form allowing the user to select from three Amazon stores
// amazon.com, amazon.ca, and amazon.co.uk
// and jumps to the relevant store based on the selection

if (isset($_POST["submitButton"])) {
	switch($_POST["store"]) {
		case "storeUS":
			header("Location: http://www.amazon.com/");
			break;
		case "storeCA":
			header("Location: http://www.amazon.ca/");
			break;
		case "storeUK":
			header("Location: http://www.amazon.co.uk/");
			break;
	}
} else {
	displayForm();
}


function displayForm() {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Please Select Your Store</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>

		<h1>Please Select Your Store</h1>

		<form action="" method="post">
			<div style="width: 30em;">
				<label for="store">Store Locations:</label>
				<select name="store" id="store" size="3">
					<option value="storeUS" selected="selected">amazon.com</option>
					<option value="storeCA">amazon.ca</option>
					<option value="storeUK">amazon.co.uk</option>
				</select>

				<div style="clear: both;">
					<input type="submit" name="submitButton" id="submitButton" value="Go Shopping"/>
				</div>
			</div>	
		</form>
<?php
}
?>
	</body>
</html>


