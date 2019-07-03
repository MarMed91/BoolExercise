<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      .red {

        background: red;
      }
      .green {

        background: green;
      }
    </style>
    <title></title>
  </head>
  <body>
  <?php
   function PrintImg() {

     include "database.php";

     // $ind = rand(0, count($vas) - 1);
     // $img = $vas[$ind];

     // var_dump($img["path"]);
     //foreach ha senso se non sono note le chiavi, se tu non sapessi per niente le chiavi tu dovresti dirti per forza quali sono le chiavi.
     //in questo caso key note e tutte uguali;
     do {

       $ind = rand(0, count($vas) - 1);
       $img = $vas[$ind];
       //$path = $img["path"];
       //$url = $img["url"];
       //$is_active["is_active"];

     } while ($img["is_active"] == false); // finchè è falso cerca il numero casuale e estrae il suo array, quando è true usciamo dal ciclo e stampiamo;
     echo   "<a href='$img[url]'><img src='$img[path]'></a>";

   }

   PrintImg();
   ?>
  </body>
</html>
