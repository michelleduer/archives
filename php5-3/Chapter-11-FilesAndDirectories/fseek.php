<?php

$handle = fopen("hello_world.txt", "r");
fseek($handle, 7);
echo fread($handle, 5) . "<br>";
echo ftell($handle);
fclose($handle);

?>
