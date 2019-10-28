<?php
  if(isset($_POST["submit"])) {
    echo "<br>";
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
      echo "El email no tiene el formato correcto <br>";
    } 
  }
  //require_once("funcioncarrito.php");
 ?>
