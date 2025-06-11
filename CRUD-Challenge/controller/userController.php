<?php

include "../model/userModel.php";
include '../config/dbconnection.php';

$dataBase = new userModel(dbconnect::connect());

function createUser() {
  echo "Name: " . $_POST['name'] . " - Email: " . $_POST['email'] . " - KeepConnected: " . (key_exists('keepConnected', $_POST)? $_POST['keepConnected']:false) . " - Pass: " . $_POST['pass'];
  try {
    $GLOBALS['dataBase']->create($_POST['name'], $_POST['email'], (key_exists('keepConnected', $_POST)? $_POST['keepConnected']:false), $_POST['pass']);
  } catch(mysqli_sql_exception $e) {
    echo "Exception got: " . $e->getMessage();
  }
}

function readUser($id=null) {
  try {
    return $GLOBALS['dataBase']->read($id);
  } catch(mysqli_sql_exception $e) {
    echo "Exception: " . $e->getMessage();
  }
}

function deleteUser($id) {
  echo "chamou";
}