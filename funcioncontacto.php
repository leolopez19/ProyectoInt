<?php
  function guardarDatos($datos) {
    $json = json_encode($datos);
    file_put_contents("usuarios.json", $json, FILE_APPEND | LOCK_EX);
  }

  $personas = array();
  if ($_POST) {
    $personas["nombre"] = $_POST["nombre"];
    $personas["email"] = $_POST["email"];
    $personas["mensaje"] = $_POST["mensaje"];
    guardarDatos($personas);
  }
 ?>
