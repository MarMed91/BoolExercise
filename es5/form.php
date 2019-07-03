<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


    include "database.php";
    $name = $_GET["mio_nome"];
    function isPresent($elem, $arr) {

      $finded  = false;
      foreach ($arr as $value) {

         if ($elem == $value) {
           $finded = true;
         }
      }
      return $finded; //non abbiamo nessuna garanzia degli elementi presenti come chiave nell'array; [potrebbe essere 0,1,2,3,56,89];
    }

    function checkInvited($name, $invitati) {

        if (isPresent($name, $invitati)) {
          echo "ok";
        } else {
          echo "ko";
        }
    }
    checkInvited($name, $invitati);



     ?>
  </body>
</html>
