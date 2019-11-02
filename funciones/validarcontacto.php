<?php

function validarContacto($datos) {

  $errores = [];

  if ($_POST) {
    echo "<br>";
    if(strlen($_POST["nombre"]) == 0) {
      echo "No completaste el campo nombre <br>";
    }
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
      echo "El email no tiene el formato correcto <br>";
    }
    if($_POST["mensaje"] == "") {
      echo "Tiene que escribir un mensaje <br>";
    }
  }
}
  validarContacto($errores);
  require_once("funcioncontacto.php");
 ?>
