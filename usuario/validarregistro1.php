<?php
include ("../cn.php");
//recibir los daot y almacenarlos en las varialbes
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$password = $_POST["password"];
$usuario = $_POST["usuario"];
$telefono = $_POST["telefono"];
$terminos = $_POST["terminos"];
//consulta para insertar
$insert = "INSERT INTO usuarios (nombre, apellido, email, password, usuario, telefono) VALUES ('$nombre','$apellido','$email','$password','$usuario','$telefono')";

//buscar usario q se este repetiendo
$verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
   
    echo '<script> alert ("El usuario ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
}

$verificar_email= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
if (mysqli_num_rows($verificar_email) > 0) {
   // echo 'El correo ya esta registrado';
   echo '<script> alert ("El correo ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
}

//ejecutar consulta
$resultado= mysqli_query($conexion, $insert);
if (!$resultado){
    echo "Error al registrarse";
} else {
    echo "Usuario registrado exitosamente";
}
//Cerrar conexion
mysqli_close($conexion);