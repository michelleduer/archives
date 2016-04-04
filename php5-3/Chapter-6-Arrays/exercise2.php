<?php

// Create a minefield on a 20x20 grid (like Minesweeper).
// Place 10 mines randomly on the grid. Use '*' for mines and '.' for empty squares.
// Author's Hint: "To return a random number between 0 and 19 inclusive, use rand(0,19)."
// I've used mt_rand() to generate more diverse random numbers

define("GRID_SIZE", 20);
$grid = array();

for ($row = 0; $row < GRID_SIZE; $row++) {
	$grid[$row] = array();

	for ($col = 0; $col < GRID_SIZE; $col++) {
		$grid[$row][$col] = false;	
	}
}

$n = 10;

while ($n > 0) {
	$row = mt_rand(0,GRID_SIZE - 1);
	$col = mt_rand(0,GRID_SIZE -1);
	
	if ($grid[$row][$col] == false) {
		$grid[$row][$col] = true;
		$n--;
	} 
}

// render grid
for ($row = 0; $row < GRID_SIZE; $row++) {
	for ($col = 0; $col < GRID_SIZE; $col++) {
		
		if ($grid[$row][$col] == true) {
			echo "* ";
		} else {
			echo ". ";
		}
	}
	// break after GRID_SIZE is reached for new line or end of grid
	echo "<br>";
}

?>

