<?php

  include "database.php"; //5) prendere in ingresso php

  if ($_GET["id"]) {

    $id = $_GET["id"];

    $incoming = -1;
    foreach ($people as $person) {

      $personId = $person["id"];

      if ($id == $personId) {
        $incoming = $person["incoming"];
      }
    }
    echo  json_encode($incoming);
  }
 ?>
