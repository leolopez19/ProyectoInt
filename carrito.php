<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Main CSS-->
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/header.css">
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Font Awesome -->
    <script src="https://kit.fontawesome.com/c7094aec04.js"></script>
    <title>Carrito</title>
</head>
<body>

  <?php require_once("header.php") ?>
    <div class="container">
        <h2 class="margin py-2 mt-2">Lista del Carrito</h2>
    </div>

    <div class="container">

        <table class="table table-light table-bordered">
            <tbody>
                <tr>
                    <th class="desc text-center white">Descripción</th>
                    <th class="cant text-center">Cantidad</th>
                    <th class="prec text-center">Precio</th>
                    <th class="tot text-center">Total</th>
                    <th class="fin text-center">--</th>
                </tr>

                <tr>
                    <td class="desc">Vino</td>
                    <td class="cant text-center">1</td>
                    <td class="prec text-center">300</td>
                    <td class="tot text-center">300</td>
                    <td><input class="btn btn-danger btn-block" type="submit" value="Eliminar"></td>
                </tr>

                <tr>
                    <td class="desc">Vino</td>
                    <td class="cant text-center">1</td>
                    <td class="prec text-center">300</td>
                    <td class="tot text-center">300</td>
                    <td><input class="btn btn-danger btn-block" type="submit" value="Eliminar"></td>
                </tr>

                <tr>
                    <td class="desc">Vino</td>
                    <td class="cant text-center">1</td>
                    <td class="prec text-center">300</td>
                    <td class="tot text-center">300</td>
                    <td><input class="btn btn-danger btn-block" type="submit" value="Eliminar"></td>
                </tr>

                <tr class="titulo3">
                    <td colspan="3" align="right"><h3>Total</h3></td>
                    <td align="right"><h3>$</h3></td>
                    <td></td>
                </tr>

                <td colspan="5">
                    <form class="form-group" action="index.php" method="POST">
                        <label for="email">Correo de contacto</label>
                        <input id="email" name="email" value="" class="form-control" type="text" placeholder="Por favor escribe tu correo" required>
                        <input class="btn btn-primary btn-lg btn-block mt-2" name="submit" type="submit">
                    </form>
                </td>
              </tbody>
            </table>
          </div>
        <?php require_once("footer.php") ?>
      </body>
    </html>
