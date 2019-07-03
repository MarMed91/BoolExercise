<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

//$arr = [1, 2, 3, 4, 5];
//$arr[10] = 100;
//
//foreach ($arr as $key => $value) {
//  echo "arr[$key] => $value";

  //$arr = [
  //  "marco" => [9, 7, 8, 6, 7],
  //  "piero" => [6, 6, 8, 6, 7, 8]
  //];

  //foreach ($arr as $k1 => $v1) {
  //  echo "arr[$k1]";
  //  foreach ($v1 as $k2 => $v2) {
  //    echo "$v2";
  //  }
  //  echo "<br>";
  //}

//function printPeople() {
//  $arr = [
//  "Teacher" =>  ["Marco", "Piero", "Andrea", "Luca", "Gianni"],
//  "PM" => ["Giulia", "Giorgia", "Matteo", "Giulio", "Lucia"]
//  ];
//
//  foreach ($arr as $k1 => $v1) {
//    echo "$k1 = ";
//    foreach ($v1 as $k2 => $v2) {
//      echo "$v2";
//    }
//    echo "<br>";
//  }
//} //il concetto di init esiste in tutti i linguaggi, il concetto di entry point di prima funzione, qui non abbiamo il concetto di document.ready() perchè simao server-side. il  raggionamento fatto sulla macchina del server, dentro la VM, prima ancora che la pagina web, l'html, venga spedito sulla macchina del client.
//printPeople();

//function accessUser() {
//  $name = $_GET["name"];
//  $mail = $_GET["mail"];
//  $age = $_GET["age"];
//
//  $length = strlen($name);
//  $specialChar = strpos($mail, "@");
//  $specialChar2 = strpos($mail, ".");
//  $number = is_numeric("$age");
//
//  if ($length > 3 && $specialChar !== false && $specialChar2 !== false && $number == true) {
//    echo "hai effetuato correttamente l'accesso";
//  } else {
//    echo "accesso negato";
//  }
//
//}
//accessUser();

//function findLetters() {
//  $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
//  $carattere = $_GET["carattere"];
//
//  echo substr_count($paragraph, $carattere);
//}
//findLetters();

//$arr = [];
//for ($i=0; $i < 15; $i++) {
//  $randElem = rand(1,100);
//  $arr[] = $randElem;
//}
//
//$sum = 0;
//foreach ($arr as $key => $value) {
//  $sum += $value;
//}
//var_dump($sum);
//echo "<br>";
//$arrAvg = $sum / 15;
//echo "$arrAvg";
//function isPresent($elem, $arr) {
  $finded = false;
  foreach ($arr as $value) {
    if ($elem == $value) {
      $finded = true;
    }
  }
  return $finded;
}
//
//function explodeP() {
  $paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  $explodeP = explode(".", $paragraph);

  foreach ($explodeP as $value) {
    echo "<p>$value</p>";
  }

}
//explodeP();

 ?>
  </body>
</html>
