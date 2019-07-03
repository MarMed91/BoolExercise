<?php

  include "database.php"; //2) database
  //var_dump($people); die(); //

  echo json_encode($people); //trasforma output var_dump in un json, perchè ha tutta la struttura fondamentale;
  //file che ci permette di leggere database da JS;
 ?>
