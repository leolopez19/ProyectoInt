<?php
ini_set('error_reporting',0);
  if(isset($_POST["submit"])) {
    $usuario = $_POST["usuario"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $informacion = $_POST["informacion"];
    $estado = [];
    $estado["l"] = "En línea";
    $estado["a"] = "Ausente";
    $estado["o"] = "Ocupado";
    $estado["d"] = "Desconectado";
    $alias = $_POST["alias"];
  }
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/1c8209e2c4.js"></script>
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/usuario.css">
    <title>Modificar perfil</title>
  </head>
  <body>

    <?php require_once("header.php") ?>
      <div class="px-0 cuerpo">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-5 mt-3">
            <h2 class="ml-5">Modificar perfil</h2>
          </div>
        </div>
        <form class="ml-3" action="usuario.php" method="POST" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="usuario" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Nombre de Usuario</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-4">
                <input type="text" class="form-control" name="usuario" id="usuario">
              </div>
          </div>
          <div class="form-group row">
            <label for="nombre" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Nombre</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <input type="text" class="form-control" name="nombre" id="nombre">
              </div>
          </div>
          <div class="form-group row">
            <label for="apellido" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Apellidos</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <input type="text" class="form-control" name="apellido" id="apellido">
              </div>
          </div>
          <div class="form-group row">
            <label for="telefono" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Teléfono</label>
              <div class="input-group col-6 col-sm-7 col-md-8 col-lg-6">
                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                <input type="text" class="form-control" name="telefono" id="telefono">
              </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Correo Electrónico</label>
              <div class="input-group col-6 col-sm-7 col-md-8 col-lg-6">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" class="form-control" name="email" id="email">
              </div>
          </div>
          <div class="form-group row">
            <label for="informacion" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Información</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <textarea class="form-control" name="informacion" id="informacion" rows="4" cols="80"></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label for="estado" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Estado</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <select class="form-control" name="estado" id="estado">
                  <?php foreach ($estado as $codigo => $valor) : ?>
                    <?php if ($_POST["estado"] == $codigo) : ?>
                  <option disabled="disabled" value="<?=$codigo?>" selected="selected">
                    <?=$valor?>
                  </option>
                    <?php else : ?>
                  <option value="<?=$codigo?>">
                    <?=$valor?>
                  </option>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </select>
              </div>
          </div>
          <div class="form-group row">
            <label for="alias" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label text-right">Alias</label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6">
                <input class="form-control" type="text" name="alias" id="alias" value="">
                <span class="help-block">Este nombre será mostrado a los usuarios, ocultando el verdadero nombre.</span>
              </div>
          </div>
          <div class="form-group row mb-0">
            <label for="button" id="button" class="col-5 col-sm-4 col-md-3 col-lg-3 col-form-label"></label>
              <div class="col-6 col-sm-7 col-md-8 col-lg-6 pb-5">
                <input type="submit" class="btn btn-success btn-lg mr-3" name="submit" value="Guardar">
                <input type="submit" class="btn btn-danger btn-lg mr-3" name="cancel" value="Borrar">
              </div>
          </div>
          <?php require_once("validarusuario.php") ?>
        </form>
      </div>
        <?php require_once("footer.php") ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
