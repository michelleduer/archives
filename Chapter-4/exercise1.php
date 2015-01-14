<!---- note: some formatting is copying a previous example in the book. If this were applied to a live webiste, I would
separate out the languages in a much cleaner format---->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Counting Script</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
		<style type="text/css">
			th {text-align: left; background-color: #999;}
			th, td {padding: 0.4em}
			tr.alt td {background: #ddd;}

		</style>
	</head>
	<body>
		<h2>Counting Script</h2>

		<table cellspacing="0" border="0" style="width: 20em; border: 1px solid #666;">
			<tr>
				<th>Number</th>
				<th>Even/Odd</th>
				<th>Prime</th>
			</tr>

		<?php
				
		$i = '';
		$j = '';
		$even = false;
		$odd = false;
		define("MAXIMUM_COUNT", 10);		// Constant for Highest Count Value

		for ($i=1; $i <= MAXIMUM_COUNT; $i++) {
			$prime = true;
			// see if $num is even/odd
			if ($i % 2 == 0) {
				$even = true;
				$odd = false;
			} else {
				$odd = true;
				$even = false;
			}

			// see if $num is prime
			if ($i == 2) {
				$prime = true;
			} elseif ($i == 1 || $even == true) {
				$prime = false;
			}  else {
				// equation for checking if remaining numbers are prime
				for ($j = 3; $j <= round($i/2, 0); $j+=2) {
					
					// all numbers will divide with themselves, so skip over
					if ($i % $j == 0) {
						$prime = false;
						break;
					} 
				}	
			} 
		?>
			<tr<?php
				if ($i % 2 != 0) echo ' class="alt"' 
			?>>

				<td><?php echo $i ?></td>
				<td><?php 
					if ($even == true) {
						echo "EVEN";
					} else {
						echo "ODD";
					} 
					?>
				</td>
				<td><?php
					if ($prime == false) {
						echo " ";
					} else {
						echo "PRIME";
					}
				 	?>
				</td>
			</tr>

			<?php
			}
			?>

		</table>
	</body>

</html>
