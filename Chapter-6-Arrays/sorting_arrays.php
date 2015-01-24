<?php

// sort() and rsort()
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");

sort($authors);
print_r($authors);
echo "<br/>";

rsort($authors);
print_r($authors);
echo "<br/><br/>";

// asort() and arsort() -- maintain the association between key and value
$myBook = array(
	"title" => "Bleak House",
	"author" => "Charles Dickens",
	"year" => 1853
);

sort($myBook);	//reindexed associative array becomes very difficult to search through
print_r($myBook);
echo "<br/>";

$myBook = array(
	"title" => "Bleak House",
	"author" => "Charles Dickens",
	"year" => 1853
);

asort($myBook);
print_r($myBook);
echo "<br/>";

arsort($myBook);
print_r($myBook);
echo "<br/><br/>";

// ksort() and krsort() -- sort by key rather than value
$myBook = array(
	"title" => "Bleak House",
	"author" => "Charles Dickens",
	"year" => 1853
);

ksort($myBook);
print_r($myBook);
echo "<br/>";

krsort($myBook);
print_r($myBook);
echo "<br/><br/>";

// array_multisort()
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$titles = array("The Grapes of Wrath", "The Trial", "The Hobbit", "A Tale of Two Cities");
$pubYears = array(1939, 1925, 1937, 1859);

array_multisort($authors, $titles, $pubYears);

print_r($authors);
echo "<br/>";

print_r($titles);
echo "<br/>";

print_r($pubYears);
echo "<br/><br/>";

// another example
$authors = array("Steinbeck", "Kafka", "Steinbeck", "Tolkien", "Steinbeck", "Dickens");
$titles = array("The Grapes of Wrath", "The Trial", "Of Mice and Men", "The Hobbit", "East of Eden", "A Tale of Two Cities");
$pubYears = array(1939, 1925, 1937, 1937, 1952, 1859);

array_multisort($authors, $titles, $pubYears);

print_r($authors);
echo "<br/>";

print_r($titles);
echo "<br/>";

print_r($pubYears);
echo "<br/><br/>";



?>
