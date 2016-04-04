<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Sorting Words in a Block of Text</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Sorting Words in a Block of Text</h1>	
		
<?php

$myText = <<<END_TEXT
The small man builds cages
for everyone he knows
while the sage, who must duck
when the moon is low
keeps dropping keys for
the beautiful rowdy prisoners.

Hafiz, 14th century poet
END_TEXT;

echo "<h2>The text:</h2>";
echo "<div style=\"width: 30em;\">$myText</div>";

// strips out commas and periods from text
$myText = preg_replace("/[\,\.]/", "", $myText);

// splits words based on whitespace chars and gets rid of any duplicates using array_unique()
$words = array_unique(preg_split("/[ \n\r\t]+/", $myText));

// sorts based on word length and with use of anonymous function create_function()
usort($words, create_function('$a, $b', 'return strlen($a) - strlen($b);'));

/***
* alternative code (provided by author):
*
* function sortByLength($a, $b) {
* 	 return strlen($a) - strlen($b);
* }
* usort($words, "sortByLength");
*
***/

echo "<h2>The sorted words:</h2>";
echo "<div style=\"width: 30em;\">";

foreach($words as $word) {
	echo "$word ";
}

echo "</div>";

?>

	</body>
</html>
