<?php

include "database.php";

$nameList = [];
$incList = [];

foreach ($people as $person) {

  $nameList[] = $person["name"];
  $incList[] = $person["incoming"];
}

$ret = [

  "type" => "pie",

  "data" => [
      "labels" => $nameList,
      "datasets" => [
        [
          "label" => 'Income',
          "backgroundColor" => ['red', 'blue',  'yellow'],
          "borderColor" => ['red', 'blue', 'yellow'],
          "data" => $incList
        ]
      ]
  ]
];


echo json_encode($ret);
 ?>
