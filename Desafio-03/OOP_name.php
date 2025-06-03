<?php

class nameTreatment {
  private $name;
  private $name_Upper;
  private $name_Len;
  private $name_LastLetter;

  function __construct($name) {
    $this->name = $name;
    $this->name_Upper = strtoupper($name);
    $this->name_Len = strlen($name);
    $this->name_LastLetter = substr($name, -1);
  }

  function getAll() {
    return "Name: $this->name\nUppercase Name: $this->name_Upper\nName Length: $this->name_Len\nName Last Letter: $this->name_LastLetter\n";
  }
}

$newName =  new nameTreatment("Guilherme");

echo $newName->getAll();