<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Book Club Members</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>

		<h1>Book Club Members</h1>

<?php

$dsn = "mysql:dbname=mydatabase";
$username = "phpuser";
$password = "password";

try {
	$conn = new PDO($dsn, $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM members WHERE age < 25";

echo "<ul>";

try {
	$rows = $conn->query($sql);
	foreach ($rows as $row) {
		echo "<li>" . $row["firstname"] . " " . $row["lastname"] . ", aged " . $row["age"] . ", joined the book club on " . $row["joindate"] . "</li>";
	}
} catch (PDOException $e) {
	echo "Query failed: " . $e->getMessage();
}

echo "</ul>";
$conn = null;

?>
	</body>
</html>
