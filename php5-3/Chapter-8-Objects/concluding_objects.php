<?php

// setting up new objects with constructors
class MyClass {
	function __construct() {
		echo "Whoa! I've come into being.<br>";
	}
}

$obj = new MyClass;

class Person {
	private $_firstName;
	private $_lastName;
	private $_age;

	public function __construct($firstName, $lastName, $age) {
		$this->_firstName = $firstName;
		$this->_lastName = $lastName;
		$this->_age = $age;
	}

	public function showDetails() {
		echo "$this->_firstName $this->_lastName, age $this->_age<br>";
	}
}

$p = new Person("Harry", "Walters", 28);
$p->showDetails();

// cleaning up objects with destructors
/*class Human {
	public function save() {
		echo "Saving this object to the database...<br>";
	}

	public function __destruct() {
		$this->save();
	}
}

$p = new Human;
unset($p);
$p2 = new Human;
die("Something's gone horribly wrong!<br>");
*/

// example of autoloading class files with __autoload()
/*
function __autoload($className) {
	$className = str_replace("..", "", $className);
	require_once(classes/$className.php);
}
*/


// storing objects as strings using serialize() and unserialize(), __sleep() and __wakeup()
class Person2 {
	public $age;
}

$harry = new Person2();
$harry->age = 28;
$harryString = serialize($harry);
echo "Harry is now serialized in the following string: '$harryString'<br>";
echo "Converting '$harryString' back to an object...<br>";
$obj = unserialize($harryString);
echo "Harry's age is: $obj->age<br>";
echo "<br><br>";

// determine object's class
class MyClass2 {
}

$obj = new MyClass2();
echo get_class($obj);
echo "<br><br>";


class Fruit {
}

class SoftFruit extends Fruit {
}

class HardFruit extends Fruit {
}

function eatSomeFruit(array $fruitToEat) {
	foreach($fruitToEat as $itemOfFruit) {
		if ($itemOfFruit instanceof Fruit) {
			echo "Eating the fruit - yummy!<br>";
		}
	}
}

$banana = new SoftFruit();
$apple = new HardFruit();
eatSomeFruit(array($banana, $apple));
?>
