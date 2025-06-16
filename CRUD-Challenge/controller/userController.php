<?php

include "../model/userModel.php";
include '../config/dbconnection.php';

$dataBase = new userModel(dbconnect::connect());

function createUser($name, $email, $keepConnected, $password) {
  echo "Name: " . $name . " - Email: " . $email . " - KeepConnected: " . $keepConnected . " - Pass: " . $password;
  if($name === "") {
    $name = null;
  }
  if($email === "") {
    $email = null;
  }
  if($password === "") {
    $password = null;
  }
  try {
    $GLOBALS['dataBase']->create($name, $email, $keepConnected , $password);
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

function updateUser($id, $name=null, $email=null, $keepConnected, $password=null) {
  try {
    $GLOBALS['dataBase']->update($id, $name, $email, $keepConnected, $password);
  } catch(mysqli_sql_exception $e) {
    echo "Exception: " . $e->getMessage();
    exit;
  }
}

function deleteUser($id) {
  try {
    $GLOBALS['dataBase']->delete($id);
  } catch(mysqli_sql_exception $e) {
    echo "Exception: " . $e->getMessage();
    exit;
  }
  echo "User Deleted Successfully";
}