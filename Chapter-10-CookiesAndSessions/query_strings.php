<?php

// Query Strings -- a good way to pass small amounts of data between browser requests
$firstName = "John";
$age = "34";
$queryString = "firstName=$firstName&amp;age=$age";
echo '<p><a href="moreinfo.php' . $queryString . '">Find out more info on this person</a></p><br>';

// query string with urlencode()
$firstName = "John";
$homePage = "http://www.example.com/";
$favoriteSport = "Ice Hockey";
$queryString = "firstName=" . urlencode($firstName) . "&amp;homePage=" . urlencode($homePage) . "&amp; favoriteSport=" . urlencode($favoriteSport);
echo '<p><a href="mroeinfo.php?' . $queryString . '">Find out more info on this person</a></p><br>';

// htmlspecialchars() and html_build_query()
$fields = array(
	"firstName" => "John",
	"homePage" => "http://www.example.com/",
	"favoriteSport" => "Ice Hockey"
);
echo '<p><a href="moreinfo.php?' . htmlspecialchars(http_build_query($fields)) . '">Find out more info on this person</a></p><br>';

$firstName = $_GET["firstName"];
$homePage = $_GET["homePage"];
$favoriteSport = $_GET["favoriteSport"];

echo "<dl>";
echo "<dt>First Name:</dt><dd>$firstName</dd>";
echo "<dt>Home Page:</dt><dd>$homePage</dd>";
echo "<dt>Favorite Sport:</dt><dd>$favoriteSport</dd>";

echo "</dl>";

?>
