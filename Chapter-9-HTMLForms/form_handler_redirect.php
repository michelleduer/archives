<?php

if (isset($_POST["submitButton"])) {
	//(deal with submitted fields here)
	header ("Location: thanks.html");
	exit;
} else {
	displayForm();
}

function displayForm() {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Membership Form</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Membership Form</h1>	

		<form action="form_handler_redirect.php" method="post">
			<div style="width:30em;">
				<label for "firstName">First Name</label>
				<input type="text" name="firstName" id="firstName" value="text"/>
				<label for "lastName">Last Name</label>
				<input type="text" name="lastName" id="lastName" value="text"/>

				<div style="clear: both;">
					<input type="submit" name="submitButton" id="submitButton" value="Send Details"/>
				</div>
			</div>
		</form>
	</body>
</html>
<?php
}

?>
