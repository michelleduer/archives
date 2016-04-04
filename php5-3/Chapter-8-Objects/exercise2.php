<?php

// Create another class "CalcAdvanced" that extends from the "Calculator" class and is also capable of storing either 1 or 2 values.

class Calculator {
	protected $_x;
	protected $_y;

	public function __construct($x, $y) {
		$this->_x = $x;
		$this->_y = $y;
	}	

	public function add() {
		return $this->_x + $this->_y;
	}

	public function subtract() {
		return $this->_x - $this->_y;
	}

	public function multiply() {
		return $this->_x * $this->_y;
	}

	public function divide() {
		return $this->_x/$this->_y;
	}
}

class CalcAdvanced extends Calculator {
	
	public function power() {
		return pow($this->_x, $this->_y);
	}

	public function sqrt() {
		return sqrt($this->_x);
	}

	public function exp() {
		return exp($this->_x);
	}
}

$ca = new CalcAdvanced(3, 4);
echo $ca->power();
echo "<br>";
echo $ca->sqrt();
echo "<br>";
echo $ca->exp();

?>

