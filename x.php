<?php
 function validarLogin($dato, $archivo){
    // $dato = $_POST["usuario"];
    $usuarios_json = file_get_contents($archivo);
    $usuarios = json_decode($usuarios_json, true);
    $resultado = [];
    foreach ($usuarios as $arrayUsuario) {
     foreach ($arrayUsuario as $usuario => $valor) {
     if ($dato["usuario"] == $valor) {
       $resultado = $arrayUsuario;
       return $resultado;
     }
     else {
         $resultado = NULL;
     }
    }
   }
   return $resultado;
  }

?>