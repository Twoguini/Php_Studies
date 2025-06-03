<?php

$arr = array(
  0 => "Today",
  "" => "Is Gonna Be the day",
  "Wonderwall"
);

$arr2 = ["I don't belive", "That Anybody feels", "The way i do about you now"];

function sum($num1, $num2) {
  return $num1 + $num2;
}

function scream($string) {
  return strtoupper($string);
}

function sing($array) {
  foreach($array as $i => $v) {
    echo "Index: $i - Value: $v\n";
  }
}

echo sum(12, 15) . "\n";

sing($arr);

sing($arr2);

echo "And i Scream from the top of my lungs: " . scream("what's going on") . "\n";

echo "Wonderwall has: " . strlen("Wonderwall") . " letters and the exact middle character is: " . substr("Wonderwall", round(strlen("Wonderwall")/2)-1, 1);