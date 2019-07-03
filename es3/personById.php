<?php

include "database.php";

$name = $_GET["name"];

$find = [];
foreach ($people as $person) {
  $personName = $person["name"];

  if ($name == $personName) {

   $find = $person;
  }
}
echo json_encode($find);
 ?>
