<?php

$authors = array("Steinbeck", "Kafka", "Tolkein", "Dickens");
$pos = 2;
echo $authors[$pos +1] . "<br/>";

// changing elements
$authors = array("Steinbeck", "Kafka", "Tolkein", "Dickens");
$authors[2] = "Melville";

// adding elements
$authors = array("Steinbeck", "Kafka", "Tolkein", "Dickens");
$authors[4] = "Melville";
$authors[] = "Orwell";

// creating arrays using the array() construct
$authors = array("Steinbeck", "Kafka", "Tolkein", "Dickens");

// creating the above array using [] and numeric indices
$authors2 = array();		// initializing array 
$authors2[0] = "Steinbeck";
$authors2[1] = "Kafka";
$authors2[2] = "Tolkien";
$authors2[3] = "Dickens";

// creating the above array using the empty [] syntax
$authors3[] = "Steinbeck";
$authors3[] = "Kafka";
$authors3[] = "Tolkien";
$authors3[] = "Dickens";

// associative array
$myBook = array("title" => "The Grapes of Wrath",
				"author" => "John Steinbeck",
				"pubYear" => 1939);

$myBook = array();
$myBook["title"] = "The Grapes of Wrath";
$myBook["author"] = "John Steinbeck";
$myBook["pubYear"] = 1939;

// changing elements in associative arrays
$myBook["title"] = "East of Eden";
$myBook["pubYear"] = 1952;

// print_r()
print_r($myBook);
echo  "<br/>";

$arrayStructure = print_r($authors, true);
echo $arrayStructure . "<br/>";

// array_slice() for extracting a range of elements
$authors = array("Steinbeck", "Kafka", "Tolkein", "Dickens");
$authorsSlice = array_slice($authors, 1, 2);
print_r($authorsSlice);
echo  "<br/>";

// count elements in an array
$authors = array("Steinbeck", "Kafka", "Tolkein", "Dickens");
$myBook = array("title" => "The Grapes of Wrath",
				"author" => "John Steinbeck",
				"pubYear" => 1939);

echo count($authors) . "<br/>";
echo count($myBook) . "<br/>";

$lastIndex = count($authors) - 1;	// example assumes indexes count from 0-3
echo $authors[$lastIndex];
echo  "<br/>";

// each() function for figuring out indexes/keys and values
$myBook = array("title" => "The Grapes of Wrath",
				"author" => "John Steinbeck",
				"pubYear" => 1939);

$element = each($myBook);
echo "Key: " . $element[0] . "<br/>";
echo "Value: " . $element[1] . "<br/>";
echo "Key: " . $element["key"] . "<br/>";
echo "Value: " . $element["value"] . "<br/>";


?>
