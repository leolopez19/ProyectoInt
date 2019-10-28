<?php
  $productos = "Ver más";
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/1c8209e2c4.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/inicio.css">

  </head>
  <body>
    <?php require_once("header.php") ?>
    <div id="main">
      <!-- Slider -->
      <div class="principal">
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slider-vino.jpg" class="d-block w-100" alt="imagen">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              <div class="carousel-item">
                <img src="img/slider-vino.jpg" class="d-block w-100" alt="imagen">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              <div class="carousel-item">
                <img src="img/slider-vino.jpg" class="d-block w-100" alt="imagen">
                <div class="carousel-caption d-none d-md-block"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de slider -->

    <!-- Contenido -->

      <div class="principal">
        <h1 class="titulo1">Productos Destacados</h1>
      </div>

      <div class="principal">
        <div class="row text-xs-center">
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <a class="text-white btn btn-primary text-decoration-none" href="producto.php"><?=$productos?></a>
          </div>
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
          <div class="thumbnail producto clearfix col-md-4 col-sm-6 my-2 py-2">
            <img src="img/1.jpg" alt="imagen" class="img-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Ex minus numquam natus commodi ipsam recusandae modi sint magnam.</p>
            <button type="button" class="btn btn-primary" name="button">Ver más</button>
          </div>
        </div>
        <!-- Fin de contenido -->
      </div>
      <?php require_once("footer.php") ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
