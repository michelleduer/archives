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

// printf()
printf("Pi rounded to a whole number: %d<br/>", M_PI);
printf("%d times %d is %d.<br/>", 2, 3, 2*3);

// padding output

printf("%06d<br/>", 123);
printf("%06d<br/>", 4567);
printf("%06d<br/>", 123456);
printf("%06d<br/>", 12345678);

print "<pre>";
printf("% 15s\n", "Hi");
printf("% 15s\n", "Hello");
printf("% 15s\n", "Hello, world!");
print "</pre>";

printf("%'#8s", "Hi");
printf("<br/>");
printf("%'#-8s", "Hi");
printf("<br/>");

// number precision
printf("%f<br/>", 123.4567);
printf("%.2f<br/>", 123.4567);
printf("%.0f<br/>", 123.4567);
printf("%.10f<br/>", 123.4567);

echo "<pre";
printf("%.2f<br/>", 123.4567);
printf("%012.2ff<br/>", 123.4567);
printf("%12.4f<br/>", 123.4567);
echo "</pre>";

printf("%.8s\n", "Hello, world!");

// trim(), ltrim(), rtrim()
$myString = "    What a lot of space!     ";
echo "<pre>";
echo "|" . trim($myString) . "|\n";
echo "|" . ltrim($myString) . "|\n";
echo "|" . rtrim($myString) . "|\n";
echo "</pre>";

$milton1 = "1: The mind is its own place, and in it self\n";
$milton2 = "2: Can make a Heav'n of Hell, a Hell of Heav'n.\n";
$milton3 = "3: What matter where, if I be still the same.\n";

echo "<pre>";
echo ltrim($milton1, "0..9: ");
echo ltrim($milton2, "0..9: ");
echo ltrim($milton3, "0..9: ");
echo "</pre>";

// padding strings with str_pad()

echo "<pre>";
echo str_pad("Hello, world!", 20);
echo "</pre>";

// wrapping lines of text with wordwrap() default 75 chars
$myString = "But think not that this famous town has only harpooneers, cannibals, and bumpkins to show her visitors, Not at all. Still New Bedford is a queer place. Had it not been for us whalemen, that tract of land would this day perhaps have been in as howling condition as the coast of Labrador.";

echo "<pre>";
echo wordwrap($myString);
echo "</pre>";

echo "<pre>";
echo wordwrap($myString, 40);
echo "</pre>";

echo "<pre>";
echo wordwrap($myString, 40, "<br/>");
echo "</pre>";

// note: n12br() function converts \n into <br/>

$myString = "This string has averylongwordindeed.";

echo wordwrap($myString, 10, "<br/>");
echo "<br/><br/>";
echo wordwrap($myString, 10, "<br/>", true);
echo "<br/><br/>";

// number_format()
echo number_format(1234567.89) . "<br/>";
echo number_format(1234567.89, 1) . "<br/>";
echo number_format(1234567.89, 2, ",", " ") . "<br/>";
echo number_format(1234567.89, 2, ".", " ") . "<br/>";






?>
