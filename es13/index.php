<?php

  class Ospite {

    public $id;
    public $name;
    public $lastname;
    public $date_of_birth;

    function __construct($id, $name, $lastname, $date_of_birth) {

      $this->id = $id;
      $this->name = $name;
      $this->lastname = $lastname;
      $this->date_of_birth = $date_of_birth;
    }
  };


  $ospiti = [];
  $ospiti = new Ospite(1, "Marco", "Medic", "1991-05-16");
  $ospiti = new Ospite(2, "Mario", "Monti", "1984-04-10");

  foreach ($ospiti as $ospite) {

    var_dump($ospite); echo '<br>';
  }

  $servername = "localhost";
  $username = "root";
  $lastname = "bool";
  $dbname = "Prova1";

  $conn = new mysqli ($servername, $username, $lastname, $dbname);

  if ($conn->$connect_errno ) {

    echo $conn->connect_error;
    return;
  }

  $sql = "
            SELECT *
            FROM 'ospiti'
         ";

 $result = $conn->query($sql);

 $ospiti = [];
 if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
       $ospiti[]=
        new Ospite($row["id"],
                   $row["name"],
                   $row["lastname"],
                   $row["date_of_birth"]);
     }
  }
  $conn->close();

  foreach ($ospiti as $ospite) {
    echo $ospite->name. "-".
         $ospite->lastname. "-".
         $date_of_birth->date_of_birth. "<br>";
  };
 ?>
