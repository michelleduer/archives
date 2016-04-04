<?php

// Create a "Calculator" class that can store 2 values and, by request, add/subtract/multiply/divide them on request.

class Calculator {
	private $_x = '';
	private $_y = '';

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

$calc = new Calculator(3, 4);
echo $calc->add();
echo "<br>";
echo $calc->multiply();

?>
