<?php
function guardarDatos($datos) {
  $json = json_encode($datos);
  file_put_contents("usuarios.json", $json, FILE_APPEND | LOCK_EX);
}

$personas = array();
if ($_POST) {
  $personas["usuario"] = $_POST["usuario"];
  $personas["nombre"] = $_POST["nombre"];
  $personas["apellido"] = $_POST["apellido"];
  $personas["telefono"] = $_POST["telefono"];
  $personas["email"] = $_POST["email"];
  $personas["informacion"] = $_POST["informacion"];
  $personas["estado"] = $_POST["estado"];
  $personas["alias"] = $_POST["alias"];
  guardarDatos($personas);
}
?>
