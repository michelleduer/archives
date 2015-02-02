<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Guess the Number</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>

<?php

// Create a number-guessing game in PHP using rand(1,100).
// User gets 5 chances to guess
// For each guess, a response informs whether the guess was too low, too high, or correct.


if (isset($_POST["counter"])) {
	$counter = $_POST["counter"];
} else {
	$counter = 0;
}

if (isset($_POST["number"])) {
	$number = $_POST["number"];
} else {
	$number = mt_rand(1,100);
}

$guess;
if (isset($_POST["guessNumber"]) && $_POST["submitButton"] && $counter < 5) {
	$guess = $_POST["guessNumber"];
	echo "You guessed " . $guess . ". TESTING: the number to guess is " . $number . ". Counter = " . $counter . "<br>";
	compareNumbers($guess, $number);

} elseif ($counter == 5) {
	echo "You've maxed out your 5 guesses! Try again with a new number.";
	resetGame();
} else {
	displayNudge();
}

// Compare the guess to the random number
function compareNumbers($guess, $number) {
	global $counter;
	if ($guess == $number) {
		echo "Wow! You guessed correctly!<br>";
		displayWin();
	} elseif ($guess > $number && $number <= 100) {
		$counter++;
		echo "Your guess was too high.<br>";
	} elseif ($guess < $number && $number >= 1) {
		$counter++;
		echo "Your guess was too low.<br>";
	} else {
		echo "Please choose a number in the range of 1-100.<br>";
	}
}

// Reset counter and number
function resetGame() {
	global $number;
	$GLOBALS["counter"] = 0;
	$number = mt_rand(1,100);
	$guess = $_POST["guessNumber"];
}

// Empty submit, ask user to submit a number
function displayNudge() {
	echo "Enter a number to see if you can guess correctly!<br>";
}

// Reset values and congratulate user for guessing the correct number
function displayWin() {
	global $number;
	echo "<h1>You guessed the correct number: " . $number . "!</h1><br>";
	resetGame();
}

?>
	<h1>Guess the Number</h1>

	<div style="width: 30em;">
		<form action="exercise1.php" method="post">
			<input type="hidden" name="counter" id="counter" value="<?php echo $counter; ?>"/>
			<input type="hidden" name="number" id="number" id="number" value="<?php echo $number; ?>"/>
			<label for="guessNumber">Guess a number between 1-100:</label>
			<input type="text" name="guessNumber" id="guessNumber" value=""/>
			<input type="submit" name="submitButton" id="submitButton" value="Submit"/>
			<input type="reset" name="resetButton" id="resetButton" value="Reset"/>
		</form>
	</div>

	</body>
</html>

