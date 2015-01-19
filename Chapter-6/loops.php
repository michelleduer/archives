<?php

// foreach() loops
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

foreach($authors as $val) {
	echo $val . "<br/>";
}



// altering attays with foreach()
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

// $val only changes WITHIN the loop, the original value remains the same
foreach($authors as $val) {
	if ($val == "Tolkien") $val = "Hardy";
	echo $val . " ";
}
echo "<br/>";

print_r($authors);
echo "<br/>";

// use reference '&' to alter original values
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

foreach($authors as &$val) {
	if ($val == "Tolkien") $val = "Hardy";
	echo $val . " ";
}
unset($val);	//deleting $val variable to ensure that it is not inadvertently used to change the last value of $authors
echo "<br/>";

print_r($authors);
echo "<br/>";


?>
