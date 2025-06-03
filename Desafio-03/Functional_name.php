<?php

$name = "Guilherme";
$name_Upper;
$name_Len;
$name_LastLetter;

function nameTreatment($name, &$out_Name_Upper, &$out_Name_Len, &$out_Name_LastLetter) {
  $out_Name_Upper = strtoupper($name);
  $out_Name_Len = strlen($name);
  $out_Name_LastLetter = substr($name, -1);
}

nameTreatment($name, $name_Upper, $name_Len, $name_LastLetter);

echo "Name: $name\nUppercase Name: $name_Upper\nName Length: $name_Len\nName Last Letter: $name_LastLetter\n";