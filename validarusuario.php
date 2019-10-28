<?php

function validarUsuario($datos) {

  $errores = [];

  if(isset($_POST["submit"])) {
    echo "<br>";
    if(strlen($_POST["usuario"]) < 10) {
      echo "El usuario debe tener al menos 10 caracteres <br>";
    }
    if(is_numeric($_POST["telefono"]) == false) {
      echo "El teléfono debe ser numérico <br>";
    }
    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
      echo "El email no tiene el formato correcto <br>";
    }
    if(strlen($_POST["alias"]) < 6) {
      echo "El alias debe tener al menos 6 caracteres <br>";
    }
  }
}
  validarUsuario($errores);
  require_once("funcionusuario.php");
 ?>
