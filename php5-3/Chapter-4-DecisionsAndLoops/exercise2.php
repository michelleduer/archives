<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Homing Pigeon Simulator</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
		<style type="text/css">
			div.map {float: left; text-align: center; border: 1px solid #666; background-color: #fcfcfc; margin: 5px; padding: 1em;}
			span.home, span.pigeon {font-weight: bold;}
			span.empty {color: #666;}
		</style>
	</head>
	<body>
		<?php

			// set map size
			$mapSize = 10;

			// position the home and the pigeon within the boundaries of the map
			do {
				$homeX = rand(0, $mapSize-1);
				$homeY = rand(0, $mapSize-1);
				$pigeonX = rand(0, $mapSize-1);
				$pigeonY = rand(0, $mapSize-1);
				$pigeonA = rand(0, $mapSize-1);
				$pigeonB = rand(0, $mapSize-1);
			} 
				// continue generating position of pigeon & home while their distance apart is less than 1/2 the width/height of the map
				while ((abs($homeX - $pigeonX) < $mapSize/2) && (abs($homeY - $pigeonY) < $mapSize/2) && (abs($homeX - $pigeonA) < $mapSize/2) && (abs($homeY - $pigeonB) < $mapSize/2)); 
			do {
				// move the pigeon closer to home
				if ($pigeonX < $homeX)
					$pigeonX++;
				elseif ($pigeonX > $homeX)
					$pigeonX--;

				if ($pigeonY < $homeY)
					$pigeonY++;
				elseif ($pigeonY > $homeY)
					$pigeonY--;

				if ($pigeonA < $homeX)
					$pigeonA++;
				elseif ($pigeonA > $homeX)
					$pigeonA--;

				if ($pigeonB < $homeY)
					$pigeonB++;
				elseif ($pigeonB > $homeY)
					$pigeonB--;


				// display the current map with appropriate symbols representing home, pigeon and empty squares 
				echo '<div class="map" style="width: ' . $mapSize . 'em;"><pre>';
				
				for ($y = 0; $y < $mapSize; $y++) {
					for ($x = 0; $x < $mapSize; $x++) {
						if ($x == $homeX && $y == $homeY) {
							echo '<spam class="home">+</span>';			//Home
						} elseif ($x == $pigeonX && $y == $pigeonY) {
							echo '<span class="pigeon">%</span>';		//Pigeon 1
						} elseif ($x == $pigeonA && $y == $pigeonB) {
							echo '<span class="pigeon">%</span>';		//Pigeon 2
						} else {
							echo '<span class="empty">.</span>';		//Empty
						}

						echo ($x != $mapSize -1) ? " " : "";
					}
					echo "\n";
				}
				echo "</pre></div>\n";

			} 	// generate display only as long as home and pigeon do not match
				while ($pigeonX != $homeX || $pigeonY != $homeY || $pigeonA != $homeX || $pigeonB != $homeY);

		?>

	</body>


</html>

