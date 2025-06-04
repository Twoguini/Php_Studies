<?php

if($_GET) {
  $getName = $_GET['name'];
  $getPass = $_GET['pass'];
  $getKeepConnected = $_GET['keepConnected'] ?? "false";
}