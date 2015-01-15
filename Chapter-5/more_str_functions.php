<?php

// strtr()
$myString = "Here's a little string";
echo strtr($myString, " '", "+-") . "<br/>";

// strtolower() and strtoupper()
$myString = "Hello, world!";
echo strtolower($myString) . "<br/>";
echo strtoupper($myString) . "<br/>";

// ucfirst() -- first letter of string uppercase, lcfirst() -- first letter of string lowercase
$myString = "Hello, world!";
echo ucfirst($myString) . "<br/>";


$myString = "Hello, world!";
echo lcfirst($myString) . "<br/>";

// ucwords() -- first letter of each word uppercase
$myString = "Hello, world!";
echo ucwords($myString) . "<br/>";

// case-insensitive search option
$myString = "Hello, world!";

if (stristr($myString, "hello")) 
	echo "Found<br/>";
else
	echo "Not found<br/>";

/**
*	functions for FORMATTING STRINGS:
**/

// printf() and sprintf()


?>
