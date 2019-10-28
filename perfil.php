<?php
session_start();
$datosDeUsuario= $_SESSION ["usuario"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
BIENVENIDO <?=$datosDeUsuario?>
<a href="cerrar_session.php">Cerrar sesion</a>
</body>
</html>