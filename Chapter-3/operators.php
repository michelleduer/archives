<?php

//comparison operators
$x = 23;

echo ($x < 24) . "<br/>";
echo ($x < "24") . "<br/><br/>";

echo ($x == 23) . "<br/>";
echo ($x === 23) . "<br/>";
echo ($x === "23") . "<br/><br/>";

echo ($x >= 23) . "<br/>";
echo ($x >= 24) . "<br/><br/>";

//incrementing operators
$x = 5;
echo ++$x . "<br/>";
$x = 5;
echo $x++ . "<br/><br/>";

//booleans
$x = 2;
$y = 3;
echo (($x > 1) && ($x < 5)) . "<br/>";
echo (($x == 2) or ($y == 0)) . "<br/>";
echo (($x == 2) xor ($y === 3)) . "<br/>";
echo (!($x == 5)) . "<br/><br/>";

//string operators
$tempF = 451;

echo "Books catch fire at " . ((5/9) * ($tempF-32)) . " degrees C.<br/><br/>";

//constants
define("MY_CONSTANT", "19");
echo MY_CONSTANT;

?>
