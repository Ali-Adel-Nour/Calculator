<?php


class Calc {

  private $operator;
  private $num1;
  private $num2;
  private $num3;

  public function __construct($operator, $num1, $num2, $num3) {
    $this->operator = $operator;
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->num3 = $num3;
  }

  public function calculator() {
    switch ($this->operator) {
      case 'add':
        return $this->num1 + $this->num2 + $this->num3;
      case 'sub':
        return $this->num1 - $this->num2 - $this->num3;
      case 'div':
        if ($this->num2 === 0 || $this->num3 === 0) {
          return "Division by zero is not allowed";
        }
        return ($this->num1 / $this->num2) / $this->num3;
      case 'mul':
        return $this->num1 * $this->num2 * $this->num3;
      default:
        return "Invalid operator";
    }
  }
}


$calculatorInstance = new Calc('add', 10, 5, 2);
echo $calculatorInstance->calculator(); // Output: 17

