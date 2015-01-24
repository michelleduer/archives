<?php

// variable functions
$trigFunctions = array("sin", "cos", "tan");
$degrees = 30;

foreach ($trigFunctions as $trigFunction) {
	echo "$trigFunction($degrees) = " . $trigFunction(deg2rad($degrees)) . "<br>";
}

// hello function
function hello() {
	echo "Hello, world!<br>";
}

hello();


// scope (includes scope.php)
function helloWithVariables() {
	$hello = "Hello, ";
	$world = "world!";
	return $hello . $world . "<br>";
}

echo helloWithVariables();

function describeMyDog() {
	$color = "brown";
	echo "My dog is $color<br>";
}

$color = "black";

describeMyDog();
echo "My cat is $color<br>";

// global variables
$myGlobal = "Hello there!";

function global_hello() {
	global $myGlobal;
	echo "$myGlobal<br>";
}

global_hello();

// superglobals i.e. $GLOBALS array
$myGlobal = "Hello there!";

function superglobal_hello() {
	echo $GLOBALS["myGlobal"] . "<br>";
}

superglobal_hello();

// static variables
function nextNumber() {
	$counter = 0;
	return ++$counter;
}

echo "I've counted to: " . nextNumber() . "<br>";
echo "I've counted to: " . nextNumber() . "<br>";
echo "I've counted to: " . nextNumber() . "<br><br>";


function static_nextNumber() {
	static $counter = 0;
	return ++$counter;
}

echo "I've counted to: " . static_nextNumber() . "<br>";
echo "I've counted to: " . static_nextNumber() . "<br>";
echo "I've counted to: " . static_nextNumber() . "<br><br>";

// anonymous functions
$mode = "+";
$processNumbers = create_function('$a, $b', "return \$a $mode \$b;");
echo $processNumbers(2,3);




?>
