<?php

function calculator($num1, $num2, $operation) {
  if(!is_int($num1) && !is_float($num1)) {
    return "Num1 is not a number";
  } elseif(!is_int($num2) && !is_float($num2)) {
    return "Num2 is not a number";
  }
  switch($operation) {
    case "+":
      return $num1 + $num2;
      break;
    case "-":
      return $num1 - $num2;
      break;
    case "*":
      return $num1 * $num2;
      break;
    case "/":
      return $num1 / $num2;
      break;
    default: 
      return "Operation does not exist";
  }
}

echo calculator(12, 2, "+") . "\n";
echo calculator(12, 2, "-") . "\n";
echo calculator(12, 2, "*") . "\n";
echo calculator(12, 2, "/") . "\n";