<?php

include "../views/signupForm.php";
include "../model/userModel.php";
include_once '../config/dbconnection.php';

$dataBase = new userModel(dbconnect::connect());

//$dataBase->create("Guilherssme", "Ti@gmal.com", true, "1255");
/*$result = $dataBase->read(3);
foreach ($result as $row) {
    echo " Name = " . $row['name'] . "\n";
}*/

$dataBase->update(1, "Gileme", "blablabla@,.com", password:"456546");