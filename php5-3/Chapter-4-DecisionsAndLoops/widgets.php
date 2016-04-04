<?php

$widgets = 23;

//example using equals operator in an if statement
if ($widgets == 23) {
	echo "We have exactly 23 widgets in stock!<br/>";
}

//example using greater than, less than and equals operators in an if statement
if ($widgets >= 10 && $widgets <= 20) {
	echo "We have between 10 and 20 widgets in stock.<br/>";
}

//previous statement written with nested if statement
if ($widgets >= 10) {
	if ($widgets <= 20) {
		echo "We have between 10 and 20 widgets in stock.<br/>";
	}
}

//if else statement
if ($widgets >= 10) {
	echo "We have plenty of widgets in stock.<br/>";
} else {
	echo "Less than 10 widgets left. Time to order some more!<br/>";
}

//if, elseif, else statement note: "elseif" aka "else if"
if ($widgets >= 10) {
	echo "We have plenty of widgets in stock<br/>";
} elseif ($widgets >= 5) {					
	echo "Less than 10 widgets left. Time to order some more!<br/>";
} else {
	echo "Panic stations: Less than 5 widgets left! Order more now!<br/>";
}


?>
