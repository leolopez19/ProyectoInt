<?php
$variable1 = "Inicio";
$variable2 = "FAQ";
$variable3 = "Contacto";

$registracion = "Registro";
$logueado = "Login";
$compras = "";

//$logueado = false;

//if(isset($_SESSION["usuario"])){ //si existe el usuario logueado sera true.
//  $logueado = true;
//}


?>


    <!-- Encabezado -->
      <div class="header">

        <div class="logo">
          <h2>Vinoteca</h2>
        </div>

        <div class="centro">
          <nav>
            <ul>
              <li>
                <a href="inicio.php">
                  <?=$variable1?>
                </a>
              </li>
              <li>
                <a href="faq.php">
                  <?=$variable2?>
                </a>
              </li>
              <li>
                <a href="contacto2.php">
                  <?=$variable3?>
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="izq">
          <nav>
            <ul>
                          <li>
                <a href="registro1.php">
                  <?=$registracion?>
                </a>
              </li>
              <li>
                <a href="login.php">
                  <?=$logueado?>
                </a>
              </li>
       
              <li>
             
                <a href="carrito.php"><span><i class="fas fa-shopping-cart"></i></span>
                  <?=$compras?>
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <!-- Search -->
          <div class="pull-right hidden-xs hidden-sm buscar text-center">
            <form action="inicio.php" method="POST">
              <input class="text-input" type="text" name="q" placeholder="Buscar">
              <input class="submit-button" type="submit" value="Buscar">
            </form>
          </div>
        </div>
        <!-- Fin del search -->
        <!-- Fin de encabezado -->
