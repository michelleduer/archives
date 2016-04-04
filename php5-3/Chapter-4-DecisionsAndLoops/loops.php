<?php

// while loop example
$widgetsLeft = 10;

while ($widgetsLeft > 0) {
	echo "Selling a widget . . . ";
	$widgetsLeft--;
	echo "done. There are $widgetsLeft widgets left.<br/>";
}

echo "We're right out of widgets!<br/>";

// do...while loop example
$width = 1;
$length = 1;

do {
	$width++;
	$length++;
	$area = $width * $length;
} while ($area < 1000);

echo "The smallest square over 1000 sq ft in area is $width ft x $length ft.<br/>";

// neater looping with for statement including initializer, loop test, and counting expression
for ($i = 1; $i <= 10; $i++) {
	echo "I've counted to: $i<br/>";
}

echo "All done!<br/>";

// break statement
$count = 0;

while (true) {
	$count++;
	echo "I've counted to: $count<br/>";
	if ($count == 10) break;
}

// break statement -- another example
$randomNumber = rand(1, 1000);

for ($i=1; $i <= 1000; $i++) {
	if ($i == $randomNumber) {
		echo "Hooray! I guessed the random number. It was: $i<br/>";
		break;
	}
}

// continue statement
for ($i=1; $i <= 10; $i++) {
	if ($i == 4) continue;
	echo "I've counted to: $i<br/>";
}

echo "Add done!<br/>";

// nested loops
for ($tens = 0; $tens < 10; $tens++) {
	for ($units = 0; $units < 10; $units++) {
		echo $tens . $units . "<br/>";
	}
}

echo "<br/><br/>";
// break in combination with nested loops

// break out of the inner loop when $units == 5
echo "Break out of inner loop when units variable equals 5.<br/>";
for ($tens = 0; $tens < 10; $tens++) {
	for ($units = 0; $units < 10; $units++) {
		if ($units == 5) break 1;
		echo $tens . $units . "<br/>"; 
	}
}

echo "Break out of outer loop when units variable equals 5.<br/>";
// Break out of the outer loop when $units == 5
for ($tens = 0; $tens < 10; $tens++) {
	for ($units = 0; $units < 10; $units++) {
		if ($units == 5) break 2;
		echo $tens . $units . "<br/>";
	}
}

?>
