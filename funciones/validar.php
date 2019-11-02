<?php
  if(isset($_POST["submit"])) {
    echo "<br>";
    if(strlen($_POST["nombre"]) == 0) {
      echo "No completaste el nombre <br>";
    }
    if(strlen($_POST["apellido"]) == 0) {
      echo "No completaste el apellido <br>";
    }
    if(filter_var($_POST["usuario"], FILTER_VALIDATE_EMAIL) == false) {
      echo "El usuario no tiene el formato correcto <br>";
    }
    if((($_POST["password"]) == "") && (($_POST["confirmar"]) == "")) {
      echo "Los dos campos de contraseña están vacios <br>";
    } else if ($_POST["password"] == "") {
      echo "La contraseña está vacio <br>";
    } else if ($_POST["confirmar"] == "") {
      echo "Falta la confirmación de la contraseña <br>";
    } else if ($_POST["password"] != $_POST["confirmar"]) {
      echo "Las contraseñas no verifican <br>";
    }

    if(strlen($_POST["ciudad"]) == 0) {
      echo "No completaste ciudad <br>";
    }
    if(strlen($_POST["provincia"]) == 0) {
      echo "No completaste provincia <br>";
    }
    if(is_numeric($_POST["codigopostal"]) == false) {
      echo "El código debe ser numérico <br>";
    }
  }
  include("funciones.php");
 ?>
