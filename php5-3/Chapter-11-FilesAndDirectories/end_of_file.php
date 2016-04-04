<?php

$handle = fopen("hello_world.txt", "r");
$hello = fread($handle, 13);

echo $hello . "<br>";
echo feof($handle) . "<br>";

$five_more_chars = fread($handle, 5);

echo $five_more_chars . "<br>";
echo feof($handle) . "<br>";

fclose($handle);

?>
