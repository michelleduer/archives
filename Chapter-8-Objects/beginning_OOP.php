<?php

// Creating classes & objects (note: unlike variables, objects are always passed as references)
class Car {
	// Nothing to see here; move along
}

$beetle = new Car();
$mustang = new Car();

print_r($beetle);
print_r($mustang);
echo "<br>";

// declaring properties
class MyClass {
	public $property1;
	private $property2;
	protected $property3;
}

class MyClass2 {
	public $widgetSold = 123;
}
echo "<br>";

// static properties (independent of any objects derived from class)
class MyClass3 {
	public static $myProperty;
}

// access static property
MyClass3::$myProperty = 123;

class Car2 {
	public $color;
	public $manufacturer;
	static public $numberSold = 123;
}

Car2::$numberSold++;
echo Car2::$numberSold;
echo "<br>";

// class constants
class MyClass4 {
	const MYCONST = 123;
}

echo MyClass4::MYCONST;
echo "<br>";

class Cars {
	const HATCHBACK = 1;
	const STATION_WAGON = 2;
	const SUV = 3;

	public $model;
	public $color;
	public $manufacturer;
	public $type;
}

$myCar = new Cars;
$myCar->model = "Dodge Caliber";
$myCar->color = "blue";
$myCar->manufactuer = "Chrysler";
$myCar->type = Cars::HATCHBACK;

echo "This $myCar->model is a ";
switch($myCar->type) {
	case Cars::HATCHBACK:
		echo "hatchback";
		break;
	case Cars::STATION_WAGON:
		echo "station wagon";
		break;
	case Cars::SUV:
		echo "SUV";
		break;
}
echo "<br>";

// creating and calling methods
class MyClass5 {
	public function aMethod() {
		// (do stuff here)
	}
}

class MyClass6 {
	public function hello() {
		echo "Hello, world!";
	}
}

$obj = new MyClass6;
$obj->hello();
echo "<br>";

// adding parameters and returning values -- very similar to functions, but it's usually better to keep objects
// self-contained and use the next approach
/*
public function aMethod($param1, $param2) {
	// (do stuff here)
	return true;
}
*/

// accessing ojbect properties from methods using $this
class MyClasses {
	public $greeting = "Hello, world!";

	public function hello() {
		echo $this->greeting;
	}
}

$obj = new MyClasses;
$obj->hello();
echo "<br>";

// alternatively:

class MyClasses2 {
	public function getGreeting() {
		return "Hello, world!";
	}
	public function hello() {
		echo $this->getGreeting();
	}
}

$obj = new MyClasses2;
$obj->hello();




?>
