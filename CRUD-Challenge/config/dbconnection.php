<?php

class dbconnect {
  public static function connect() {
    require_once __DIR__ . "/../vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();

    $host = "localhost";
    $user = $_ENV['dbUser'];
    $pass = $_ENV['dbPass'];
    $targetDb = "crud_challenge";

    $db = mysqli_connect($host, $user, $pass, $targetDb);
    if($db->connect_errno) {
      die("Falha ao conectar : (" . $db->connect_errno . ") " . $db->connect_erro);
      return;
    } else {
      return $db;
    }
  }
}