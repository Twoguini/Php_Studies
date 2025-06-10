<?php
// TODO - USE PREPARE for prevent sql injections

class UserModel {
  private $db;

  function __construct($dataBase) {
    $this->db = $dataBase;
  }

  public function create($name, $email, $keepConnected, $password) {
    $keepConnected = $keepConnected == "on"? true : false;
    $keepConnected = (int)$keepConnected;
    $this->db->query("INSERT INTO users (name, email, keepConnected, password) values ('$name', '$email', $keepConnected, '$password')");
  }
  
  public function read($id=null) {
    if(!is_null($id)) {
      return $this->db->query("SELECT * FROM users WHERE id = $id");
    } else return $this->db->query("SELECT * FROM users");
  }

  public function update($id, $name=null, $email=null, $keepConnected=null, $password=null) {
    $columnsSelectionArr = [];
    $columnValueDefArr = [];

    if(!is_null($name)) {
      $columnsSelectionArr[] = "name";
    }if(!is_null($email)) {
      $columnsSelectionArr[] = "email";
    }if(!is_null($password)) {
      $columnsSelectionArr[] = "password";
    }if(!is_null($keepConnected)) {
      $keepConnected = (int)$keepConnected;
      $columnsSelectionArr[] = "keepConnected";
    }

    foreach($columnsSelectionArr as $column) {
      $columnValueDefArr[] = "$column = ". "'".$$column ."'";
    }
    echo "UPDATE users SET ". implode(", ", $columnValueDefArr) ." WHERE id=$id";

    $this->db->query("UPDATE users SET ". implode(", ", $columnValueDefArr) ." WHERE id=$id");
  }
  
  public function delete($id) {
    $this->db->query("DELETE FROM users WHERE id=$id");
  }

  public function closeDb() {
    mysqli_close($this->db);
  }
}