<?php

$handle = fopen("people.csv", "r");
while($record = fgetcsv($handle, 1000)) {
	echo "Name: {$record[0]} {$record[1]}, Age: {$record[2]}<br>";
}

fclose($handle);

?>
