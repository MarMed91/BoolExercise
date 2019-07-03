<?php

  include "database.php";

  class Persona {

    private $name;
    private $lastname;

      public function __construct($name, $lastname) {
        $this->name = $name;
        $this->lastname = $lastname;
      }

      function setName($name) {

        $this->name = $name;
      }
      function getName($name) {

        return $this->name;
      }

      function setlastName($lastname) {

        $this->lastname = $lastname;
      }
      function getLastName($lastname) {

        return $this->lastname;
      }

    }
  class Ospite extends Persona {

    private $date_of_birth;
    private $document_type;
    private $document_number;

      function __construct($date_of_birth, $document_type, $document_number) {

        parent::__construct($name, $lastname);
        $this->setDateOfBirth($date_of_birth);
        $this->setDocumentOfType($document_type);
        $this->setDocumentNumber($document_number);
      }

      function set($date_of_birth, $document_type, $document_number) {

          $this->setDateOfBirth($date_of_birth);
          $this->setDocumentOfType($document_type);
          $this->setDocumentNumber($document_number
        );
      }

      function setDateOfBirth() {
        $this->date_of_birth = $date_of_birth;
      }
      function getDateOfBirth() {

        return $this->date_of_birth;
      }

      function setDocumentOfType() {
        $this->document_type = $document_type;
      }
      function getDocumentOfType() {
        return $this->document_type;
      }

      function setDocumentNumber() {
        $this->document_number = $document_number;
      }
      function getDocumentNumber() {
        return $this->document_number;
      }

      public static function getAllOspiti($conn) {

        $sql = "
                  SELECT *
                  FROM 'ospiti'
               ";

       $result = $conn->query($sql);

       $ospiti = [];
       if ($result->num_rows > 0) {
           while ($row = $result->fetch_assoc()) {
             $ospiti[]=
              new Ospite(
                         $row["name"],
                         $row["lastname"],
                         $row["date_of_birth"],
                         $row["document_type"],
                         $row["document_number"]);
           }
       }
       return $ospiti;
      }
    }
  class Paganti extends Persona{

    private $address;

    function __construct($name, $lastname, $address) {

      parent:: __construct($name, $lastname);
      $this->setAddress($address);
    }

    function getAddress() {

      return $this->address;
    }
    function setAddress($address) {

      $this->address = $address;
    }
  }

  $persona = new Persona("Marco", "Medic");
  $ospite = new Ospite("Mario", "Marchi", "2001-04-16", "863-743-2106 x4269");
  $pagante = new Paganti("Paolo", "Rossi", "viale Cenisio, 3");

  $conn = new mysqli ($servername, $username, $password, $dbname);

  if ($conn->connect_errno ) {

    echo $conn->connect_error;
    return;
}
  $ospiti = Ospite::getAllOspiti($conn);
  $conn->close();

    foreach ($ospiti as $ospite) {
      var_dump($ospite);
    }


  //var_dump($persona); echo "<br>";
  //var_dump($ospite); echo "<br>";
  //var_dump($pagante); echo "<br>";

 ?>
