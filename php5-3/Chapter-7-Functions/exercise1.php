<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Definitions Function</title>
		<link rel="stylesheet" type="text/css" href="common.css" />
	</head>
	<body>
		<h1>Definitions Function</h1>	
		
		<dl>

<?php

// write a function that takes an array argument and returns a string
// return string in a definition list where each array key" = term, "value" = a definition for the term
// used a random list of words from http://www.vocabulary.com/lists/466436#view=notes

$dictionary = array(
	array(
		"word" => "endeavor",
		"definition" => "a purposeful or industrious undertaking (especially one that requires effort or boldness"
	),
	array(
		"word" => "dinghy",
		"definition" => "a small boat of shallow draft with cross thwarts for seats and rowlocks for oars with which it is propelled"
	),
	array(
		"word" => "encapsulate",
		"definition" => "enclose in a capsule or other small container"
	),
	array(
		"word" => "disclaimer",
		"definition" => "denial of any connection with or knowledge of"
	),
	array(
		"word" => "lithe",
		"definition" => "moving and bending with ease"
	),
	array(
		"word" => "strive",
		"definition" => "attempt by employing effort"
	),
	array(
		"word" => "psychopath",
		"definition" => "someone with a sociopathic personality; a person with an antisocial personality disorder ('psychopath' was once widely used but has now been superseded by 'sociopath')"
	),
	array(
		"word" => "ineptitude",
		"definition" => "unskillfulness resulting from lack of training"
	),
	array(
		"word" => "ostentatious",
		"definition" => "intended to attract notice and impress others"
	),
	array(
		"word" => "iota",
		"definition" => "a tiny or scarecly detectable amount"
	),
);

// use function with key (word) to output definition of word
$words = array("dinghy", "encapsulate", "iota", "lithe");

$selected_word = '';
$definition = '';


foreach ($dictionary as $select) {
	foreach ($words as $key => $word) {
		if ($select["word"] == $word) {
			$selected_word = $word;
			$definition = $select["definition"];
?>
			<dt><dfn><?php echo $selected_word ?></dfn></dt>
				<dd><?php echo $definition ?></dd>
<?php

		}
	}
}

?>
		</dl>

	</body>
</html>


