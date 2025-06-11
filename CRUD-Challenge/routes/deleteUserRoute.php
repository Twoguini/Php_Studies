<?php

include_once "../controller/userController.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['action']) && $_POST['action'] === "delete") {
  deleteUser($_POST['id']);
  exit("Usuário excluído com sucesso.");
}