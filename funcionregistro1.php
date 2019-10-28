<?php
  session_start(); //siempre arriba de todo. se puede hacer un include para esto
  if ($_POST) {
     $usuarios = [
      "nombre"=> $_POST["nombre"],
      "apellido" => $_POST["apellido"],
      "usuario"=> $_POST["email"],
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
      "confirmar" => password_hash($_POST["confirmar"], PASSWORD_DEFAULT),
      "ciudad" => $_POST["ciudad"],
      "provincia" => $_POST["provincia"],
      "codigopostal" => $_POST["codigopostal"],
      "terminos"=> $_POST["terminos"]
     ];

     $archivo = "usuarios.json";
     $traigoJson = file_get_contents($archivo); //Este ya es universal, solo se cambia el registro.json
     $jsonArray = json_decode($traigoJson, true);
     $jsonArray[] = $usuarios;
     $json = json_encode($jsonArray);
     file_put_contents($archivo, $json);

     $_SESSION[$usuarios] = $_POST ["email"]; 
    header ('location: login.php');

 }
 else {
    header ('location: registro1.php');
 }


  
  

  
    
    
  
?>
