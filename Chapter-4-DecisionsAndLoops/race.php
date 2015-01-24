<?php


//test the speed of your Web browser

// current UNIX code stamp in microseconds 
$startTime = microtime(true);

// if the current time (microseconds) is earlier than 1/10000th of a second after the UNIX code stamp, keep printing
for ($num = 1; microtime(true) < $startTime + 0.0001; $num = $num * 2) {
	echo "Current number: $num<br/>";
}

echo "Out of time!<br/>";

?>
