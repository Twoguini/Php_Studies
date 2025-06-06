<?php
// TODO - USE PREPARE for prevent sql injections

class UserModel {
  private $db;

  function __construct($dataBase) {
    $this->db = $dataBase;
  }

  public function create($name, $email, $keepConnected, $password) {
    $this->db->query("INSERT INTO users (name, email, keepConnected, password) values ('$name', '$email', $keepConnected, '$password')");
  }
  
  public function read($id) {
    return $this->db->query("SELECT * FROM users WHERE id = $id");
  }

  public function update($id, $name=null, $email=null, $keepConnected=false, $password=null) {
    $columnsSelectionArr = [];
    $columnValueDefArr = [];

    if(!is_null($name)) {
      $columnsSelectionArr[] = "name";
    }if(!is_null($email)) {
      $columnsSelectionArr[] = "email";
    }if(!is_null($password)) {
      $columnsSelectionArr[] = "password";
    }

    foreach($columnsSelectionArr as $column) {
      $columnValueDefArr[] = "$column = ". "'".$$column ."'";
    }

    $this->db->query("UPDATE users SET ". implode(", ", $columnValueDefArr) ." WHERE id=$id");
  }
  
  /*public function delete($id) {

  }*/
}