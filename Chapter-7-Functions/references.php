<?php

// passing and returning by value
function resetCounter($c) {
	$c = 0;
}

$counter = 0;
$counter++;
$counter++;
$counter++;
echo "$counter<br>";
resetCounter($counter);
echo "$counter<br>";

// using references to change variable's original content
$myVar = 123;
$myRef = &$myVar;
$myRef++;
echo $myRef . "<br>";
echo $myVar . "<br>";

function resetCounter2(&$c) {
	$c = 0;
}

$counter = 0;
$counter++;
$counter++;
$counter++;
echo "$counter<br>";
resetCounter2($counter);
echo "$counter<br><br>";

// returning references from functions
$myNumber = 5;

function &getMyNumber() {
	global $myNumber;
	return $myNumber;
}

$numberRef = &getMyNumber();
$numberRef++;
echo "\$myNumber = $myNumber<br>";
echo "\$numberRef = $numberRef<br><br>";






?>
