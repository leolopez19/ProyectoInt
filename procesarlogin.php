<?php

//var_dump($_POST);
//die();

$email = $_POST["email"]; 
$password = $_POST ["password"];
$archivo = "usuarios.json";
//verificar email y pass para iniciar sesion
//llamar o crea funcion para verificar ususario y me retornara true en caso de q exista.
include_once ("funciones.php");
$exito = verificardatos($email,$password,$archivo); 
//$exito=true;
//si el resultado es true que inicie sesion y lleve a perfil o pag de bienvenida
if ($exito==true){
   //si el resultado es true que inicie sesion y lleve a perfil o pag de bienvenida
   header("location:perfil.php");
}
else {
//es caso de false que siga en login o que de un mensaje de error
header ("location:login.php");
}
?>

