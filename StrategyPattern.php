<?php
class OperationAdd {
	function __construct() {}
	
	public function doOperation(int $num1, int $num2): int {
		return $num1 + $num2;
	}
}

class OperationSubstract {
	function __construct() {}
	
	public function doOperation(int $num1, int $num2): int {
		return $num1 - $num2;
	}
}

class OperationMultiply {
	function __construct() {}
	
	public function doOperation(int $num1, int $num2): int {
		return $num1 * $num2;
	}
}

class Context {
	public $strategy;
	
	function __construct($strategy) {
		if(is_object($strategy)) {
			$this->strategy = $strategy;
		} else {
			echo 'Context strategy needs to be an object type.';
		}
	}
	
	public function executeStrategy(int $num1, int $num2): int {
		return $this->strategy->doOperation($num1, $num2);
	}
}

$context_add = new Context(new OperationAdd());
echo $context_add->executeStrategy(10, 5) . '<br/>';

$context_substract = new Context(new OperationSubstract());
echo $context_substract->executeStrategy(10, 5) . '<br/>';

$context_multiply = new Context(new OperationMultiply());
echo $context_multiply->executeStrategy(10, 5) . '<br/>';
?>