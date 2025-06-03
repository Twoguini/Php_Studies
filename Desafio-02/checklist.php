<?php

$isa_Bool = true;
$isa_String = "Sim";
$isa_Int = 1;
$isa_Float = 1.1;
$isa_SecondInt = 5;
$piramidBase = 10;

if(is_bool($isa_Bool)) {
  echo "isa_Bool is a Boolean\n";
} if(is_string($isa_String)) {
  echo "isa_String is a String\n";
} if(is_int($isa_Int)) {
  echo "isa_Int is a Integer\n";
} if(is_float($isa_Float)) {
  echo "isa_Float is a Float\n";
}

if($isa_Int < $isa_SecondInt) {
  
  while($isa_Int < $isa_SecondInt) {
    $isa_Int++;
  }

  if($isa_Int == $isa_SecondInt) {
    for($i = $piramidBase; $i > 0; $i-=2) {
      for($inde = round(($piramidBase-$i)/2); $inde != 0; $inde--) {
        echo " ";
      }
      for($ind = $i; $ind != 0; $ind--) {
        echo "*";
      }
      echo "\n";
    }
  }
}