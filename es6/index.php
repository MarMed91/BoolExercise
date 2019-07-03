<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function printHotel() {
      include "database.php";

      foreach ($hotels as $value) {
         $name = $value["nome"];
         $description = $value["descrizione"];
         $parking = $value["parcheggio"];
         $stars = $value["stelle"];
         $distance = $value["lontananza"];
         if ($parking) {

           echo "<p>$name</p>";
           echo "<br>";
           echo "<p>$description</p>";
           echo "<br>";
           echo "<p>$parking</p>";
           echo "<br>";
           echo "<p>$stars</p>";
           echo "<br>";
           echo "<p>$distance</p>";
         }

      }
 }
 printHotel();
     ?>
  </body>
</html>
