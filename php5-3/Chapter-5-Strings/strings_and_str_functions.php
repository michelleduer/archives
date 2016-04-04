<?php

// examples of strings with single and double quotations
$myString = 'world';
echo "Hello, $myString!<br/>";
echo 'Hello, $myString!<br/>';
echo "<pre>Hi\tthere!</pre><br/>";
echo '<pre>Hi\tthere!</pre><br/>';

// curly braces and strings
$favoriteAnimal = "cat";
echo "My favorite animals are {$favoriteAnimal}s<br/>";

$myArray["age"] = 24;
echo "My age is {$myArray["age"]}.<br/>";



// heredoc example -- substitues variable value
$person = "small man";

$myString = <<<POEM
The $person builds cages for everyone he knows
POEM;

echo "<pre>$myString</pre>";

// nowdoc example -- does not substitute variable value
$person = "sage";

$myString = <<<'NEXT'
while the $person, who must duck his head when the moon is low
NEXT;

echo "<pre>$myString</pre>";


// strlen()
$myString = "hello";
echo strlen($myString) . "<br/>";
echo strlen("goodbye") . "<br/><br/>";


// accessing characters within a string
$myString = "Hello, world!";
echo $myString[0] . "<br/>";
echo $myString[7] . "<br/>";
$myString[12] = '?';
echo $myString . "<br/><br/>";


// substr()
$myString = "Hello, world!";
echo substr($myString, 0, 5) . "<br/>";
echo substr($myString, 7) . "<br/>";
echo substr($myString, -1) . "<br/>";
echo substr($myString, -5, -1) . "<br/><br/>";

// strstr()
$myString = "Hello, world!";
echo strstr($myString, "wor") . "<br/>";
echo (strstr($myString, "xyz") ? "Yes" : "No") . "<br/>";
echo strstr($myString, "wor", true) . "<br/><br/>";


// strpos() and strrpos(), the latter finds the last match rather than the first
$myString = "Hello, world!";
echo strpos($myString, "wor") . "<br/>";
echo strpos($myString, "xyz") . "<br/>";

$myString = "Hello, world!";
if (strpos($myString, "Hel") === false)
	echo "Not found";

$myString = "Hello, world!";
echo strpos($myString, "o") . "<br/>";
echo strpos($myString, "o", 5) . "<br/>";

$myString = "Hello, world!";
$pos = 0;
while (($pos = strpos($myString, "l", $pos)) !== false) {
	echo "The letter 'l' was found at position: $pos<br/>";
	$pos++;
}

$myString = "Hello, world!";
echo strpos($myString, "o") . "<br/>";
echo strrpos($myString, "o") . "<br/><br/>";


// substr_count()
$myString = "I say, nay, nay, and thrice nay!";
echo substr_count($myString, "nay") . "<br/><br/>";

$myString = "I say, nay, nay and thrice nay!";
echo substr_count($myString, "nay", 9) . "<br/>";
echo substr_count($myString, "nay", 9, 6) . "<br/><br/>";


// strpbrk()
$myString = "Hello, world!";
echo strpbrk($myString, "abcdef") . "<br/>";
echo strpbrk($myString, "xyz") . "<br/>";

$username = "$matt@example.com";
if (strpbrk($username, "@!"))
	echo "@ and ! are not allowed in username<br/><br/>";


// str_replace()
$myString = "It was the best of times, it was the worst of times.";
echo str_replace("times", "bananas", $myString) . "<br/>";

$myString = "It was the best of times, it was the worst of times.";
echo str_replace("times", "bananas", $myString, $num) . "<br/>";
echo "The text was replaced $num times.<br/>";


// substr_replace()
$myString = "It was the best of times, it was the worst of times.";
echo substr_replace($myString, "bananas", 11) . "<br/>";

$myString = "It was the best of times, it was the worst of times.";
echo substr_replace($myString, "bananas", 19, 5) . "<br/>";

$myString = "It was the best of times, it was the worst of times.";
echo substr_replace($myString, "bananas", 19, -20) . "<br/>";

$myString = "It was the best of times, it was the worst of times.";
echo substr_replace($myString, "really ", 3, 0) . "<br/>";



?>
