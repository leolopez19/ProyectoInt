<?php
session_start();
$_SESSION["email"] = $email;

//header("location: perfil.php");

function validarLogin($datos){

    $errores = [];
  
    if(isset($_POST["submit"])) {
      echo "<br>";
      if(($_POST["email"]) == "") {
        echo "No completaste el email <br>";
      }
      if(($_POST["password"]) == "") {
        echo "No completaste el password <br>";
      }
      if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
        echo "El usuario no tiene el formato correcto <br>";
      }
     
  }
    validarLogin($errores);
    require_once("funcionlogin1.php");
?>