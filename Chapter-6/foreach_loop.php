<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>foreach() Loop</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>foreach() Loop</h1>	
		
<?php

$myBook = array("title" => "The Grapes of Wrath",
				"author" => "John Steinbeck",
				"pubYear" => 1939);

foreach($myBook as $key => $value) {
	echo "<dt>$key</dt>";
	echo "<dd>$value</dd>";
}

?>

	</body>
</html>
