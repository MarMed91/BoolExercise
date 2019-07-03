<?php

  include "database.php";

  $nameList = [];
  $incList = [];

  foreach ($people as $person) {

    $nameList[] = $person["name"];
    $incList[] = $person["incoming"];
  }

  $retArr = [$nameList, $incList];

  //var_dump($retArr);
  echo json_encode($retArr);
 ?>
