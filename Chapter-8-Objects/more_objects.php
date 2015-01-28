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

?>
