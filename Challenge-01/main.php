<?php
function logNameAgeDate($name, $age) {
  date_default_timezone_set('America/Sao_Paulo');
  echo "$name is $age years old - " . date("m.d.y\-H:i");
}

logNameAgeDate("Guilherme", 19);