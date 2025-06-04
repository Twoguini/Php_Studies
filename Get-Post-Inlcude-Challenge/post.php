<?php

if($_POST) {
  $postName = $_POST['name'];
  $postPass = $_POST['pass'];
  $postKeepConnected = $_POST['keepConnected'] ?? "false";
}