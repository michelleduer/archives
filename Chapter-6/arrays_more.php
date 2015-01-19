<?php

// adding and removing array elements using array_unshift(), array_shift(), array_push() and more
// array_unshift() adds new elements at start of array
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
echo array_unshift($authors, "Hardy", "Melville") . "<br/>";

print_r($authors);
echo "<br/>";

// array_shift() removes first element in array AND returns its value (not key)
$myBook = array(
			"title" => "The Grapes of Wrath",
			"author" => "John Steinbeck",
			"pubYear" => 1939
);

echo array_shift($myBook) . "<br/>";
print_r($myBook);
echo "<br/>";

// array_push() adds a new element to end of array
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
echo array_push($authors, "Hardy", "Melville") . "<br/>";

print_r($authors);
echo "<br/>";

// creating a multidimensional array
$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$newAuthors = array("Hardy", "Melville");

echo array_push($authors, $newAuthors) . "<br/>";

print "<pre>";
print_r($authors);
print "</pre>";

// array_pop() similar to array_shift() but removes the last element AND returns its value (not key)
$myBook = array(
			"title" => "The Grapes of Wrath",
			"author" => "John Steinbeck",
			"pubYear" => 1939
);

echo array_pop($myBook) . "<br/>";
print_r($myBook);
echo "<br/><br/>";


// array_merge()
$authors = array("Steinbeck", "Kafka");
$moreAuthors = array("Tolkien", "Milton");

print_r(array_merge($authors, $moreAuthors));
echo "<br/><br/>";

// vs. array_push()
$authors = array("Steinbeck", "Kafka");
$moreAuthors = array("Tolkien", "Milton");
array_push($authors, $moreAuthors);

print_r($authors);
echo "<br/><br/>";

// and back to array_merge()
$myBook = array(
			"title" => "The Grapes of Wrath",
			"author" => "John Steinbeck",
			"pubYear" => 1939
);

$myBook = array_merge($myBook, array("numPages" => 464));

print_r($myBook);
echo "<br/><br/>";

$authors = array("Steinbeck", "Kafka", "Tolkien", "Dickens");
$authors = array_merge($authors, array(0 => "Milton"));

print_r($authors);
echo "<br/><br/>";

// export() and implode() -- converting between arrays and strings
$fruitString = "apple,pear,banana,strawberry,peach";
$fruitArray = explode(",", $fruitString);
print_r($fruitArray);
echo "<br/><br/>";

$fruitString = "apple,pear,banana,strawberry,peach";
$fruitArray = explode(",", $fruitString, 3);
print_r($fruitArray);
echo "<br/><br/>";

$fruitArray = array("apple", "pear", "banana", "strawberry", "peach");
$fruitString = implode(",", $fruitArray);
echo $fruitString . "<br/><br/>";

// list() -- converting an array into a list of variables
$myBook = array("The Grapes of Wrath", "John Steinbeck", 1939);

$title = $myBook[0];
$author = $myBook [1];
$pubYear = $myBook[2];

echo $title . "<br/>";
echo $author . "<br/>";
echo $pubYear . "<br/>";

$myBook = array("The Grapes of Wrath", "John Steinbeck", 1939);
list($title, $author, $pubYear) = $myBook;

echo $title . "<br/>";
echo $author . "<br/>";
echo $pubYear . "<br/><br/>";

$myBook = array(
			"title" => "The Grapes of Wrath",
			"author" => "John Steinbeck",
			"pubYear" => 1939
);

while (list($key, $value) = each($myBook)) {
	echo "<dt>$key</dt>";
	echo "<dd>$value</dd>";
}

?>
