<?php

$handle = fopen("hello_world.txt", "r");
$text = "";

while (!feof($handle)) {
	$text .= fread($handle, 3);
}

echo $text. "<br>";
fclose($handle);

?>
