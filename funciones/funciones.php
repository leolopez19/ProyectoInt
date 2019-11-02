<?php
session_start();

function guardar($datos) {
$file = 'usuarios.txt';

    foreach ($datos as $dato) {
        $person = $dato . ";";
        file_put_contents($file, $person, FILE_APPEND | LOCK_EX);

    }
    $newline = "\n";
    file_put_contents($file, $newline, FILE_APPEND | LOCK_EX);
}






function verificardatos ($email,$password,$archivo) {
        $traigoJson = file_get_contents($archivo);
        $exito = false;
    if ($traigoJson) {
        
        $listaUsuario = json_decode($traigoJson, true);
        foreach($listaUsuario as $posicion => $usuario){ // posicion es el 0,1,2,3 
            if ($email == $usuario ["usuario"]) { 
                $_SESSION ["usuario"] = $usuario ['nombre'];
                
                $exito = true;
                return $exito;
            }
        }
        
    }
    return $exito;
 }





 function registrarusuario(){
 //siempre arriba de todo. se puede hacer un include para esto
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
 
    $archivo = "../json/usuarios.json";
    $traigoJson = file_get_contents($archivo); //Este ya es universal, solo se cambia el registro.json
    $jsonArray = json_decode($traigoJson, true);
    $jsonArray[] = $usuarios;
    $json = json_encode($jsonArray);
    file_put_contents($archivo, $json);

    $_SESSION[$usuarios] = $_POST ["email"]; 
   header ('location: ../usuario/login.php');

}
else {
   header ('location: ../usuario/registro1.php');
}
 }








?>
