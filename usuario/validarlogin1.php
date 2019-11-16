<?php
$usuario=$_POST['email'];
$password=$_POST['password'];

//conectar a la base de datos
$conexion= mysqli_connect("localhost","root","","digital_wine");
$consulta= "SELECT * FROM usuarios where email='$usuario' and password='$password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0) {
    header ("location:bienvenido.html");
}
else {
    echo "Error en la autentificacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);