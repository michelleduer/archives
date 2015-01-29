<?php

// making self-contained classes with encapsulation	
// $_totalBalance remains private and the functions are used to manipulate $_totalBalance indirectly
/*
class Account {
	private $_totalBalance = 0;

	public function makeDeposit($amount) {
		$this->_totalBalance += $amount;
	}

	public function makeWithdrawal($amount) {
		if ($amount < $this->_totalBalance) {
			$this->_totalBalance -= $amount;
		} else {
			die("Insufficient funds<br>");	// note: DIE function here
		}
	}

	public function getTotalBalance() {
		return $this->_totalBalance;
	}
}

$a = new Account;
$a->makeDeposit(500);
$a->makeWithdrawal(100);
echo $a->getTotalBalance() . "<br>";
$a->makeWithdrawal(1000);
*/

// object overloading with _get(), _set(), and call()
class Car {
	public function __get($propertyName) {
		echo "The value of '$propertyName' was reqeusted<br>";
		return "blue";
	}
}

$car  = new Car;
$x = $car->color;
echo "The car's color is $x<br>";

// three other overloading methods: __isset(), __unset(), __callStatic()
class MyClass {
	public function __isset($propertyName) {
		// All properties beginning with "test" are "set"
		return(substr($propertyName, 0, 4) == "test") ? true: false;
	}
}

$testObject = new MyClass;
echo isset($testObject->banana) . "<br>";
echo isset($testObject->testBanana) . "<br>";


class MyClass2 {
	public function __unset($propertyName) {
		echo "Unsetting property '$propertyName'<br>";
	}
}

$testObject = new MyClass2;
unset($testObject->banana);


class MyClass3 {
	public static function __callStatic($methodName, $arguments) {
		echo "Static method '$methodName' called with the arguments:<br>";
		foreach($arguments as $arg) {
			echo "$arg<br>";
		}
	}
}

MyClass3::randomMethod("apple", "peach", "strawberry");


// blocking inheritance and overrides with final classes and methods
final class HandsOffThisClass {
	public $someProperty = 123;
	public function someMethod() {
		echo "A method";
	}
}

// generates error:
/*
class ChildClass extends HandsOffThisClass {
}
*/


class ParentClass {
	public $someProperty = 123;
	public final function handsOffThisMethod() {
		echo "A method";
	}
}

// generates error:
/*
class ChildClass extends ParentClass {
	public function handsOffThisMethod() {
		echo "Trying to override the method";
	}
}
*/


?>
