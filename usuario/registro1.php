<?php
  ini_set('error_reporting',0);

    $nombre = "";
    $apellido = "";
    $email = "";
    $password = "";
    $usuario = "";
    $telefono = "";


  if(isset($_POST)) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $usuario = $_POST["usuario"];
    $telefono = $_POST["telefono"];
    $terminos = $_POST["terminos"];
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/registro1.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/c7094aec04.js"></script>
    <title>Registro</title>
  </head>
  <body>
  <?php require_once("../general/header.php") ?>

    <div class="caja py-5 px-3">
        <h2>REGISTRO</h2>
        <form action="validarregistro1.php"  method="POST" class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="<?=$nombre?>" class="form-control" id="nombre" placeholder="Nombre" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" value="<?=$apellido?>" class="form-control" id="apellido" placeholder="Apellido" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="usuario">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    
                  </div>
                  <input type="text" name="email" value="<?=$email?>" class="form-control" id="email" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
            </div>

            <div class="form-group" id="contra2">
                <label for="confirmar">Usuario</label>
                <input type="text" id="usuario" name="usuario" value="<?=$usuario?>" class="form-control" aria-describedby="passwordHelpInline">
                <small id="confi" class="text-muted"></small>
              </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" value="<?=$password?>" class="form-control" aria-describedby="passwordHelpInline">
                <small id="pass" class="text-muted"></small>
              </div>
              
            
              <div class="col-md-3 mb-3">
                <label for="codigopostal">Telefono</label>
                <input type="text" name="telefono" value="<?=$telefono?>" class="form-control" id="telefono" placeholder="Telefono" required>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" name="terminos" type="checkbox" id="terminos" required>
                <label class="form-check-label" for="terminos">
                  Acepto terminos y condiciones.
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="imagen"></label>
              <input type="file" id="imagen" name="imagen" value="">
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
            <?php require_once("../funciones/validarregistro.php") ?>
          </form>
        </div>
      <?php require_once("../general/footer.php") ?>
    </body>
  </html>
