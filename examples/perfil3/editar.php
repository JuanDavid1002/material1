<?php
include'../../conexion.php';

$id = $_GET['id'];
$consulta = "SELECT idusuarios, nombres_usuarios, apellidos_usuarios, direccion_usuarios,
telefono_usuarios, ciudad_usuarios, correo_usuarios, nombre_usuario FROM tab_usuarios 
WHERE idusuarios='$id'";

if ($resultado = $conn->query($consulta)) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="material-dashboard1.css">
    <script src="dist/sweetalert2.all.min.js"></script>
  </head>

  </head>

  <body>

    <!-- End Navbar -->
    <style>
      /* Background styles */
      body {
        background-image: url('https://images6.alphacoders.com/303/thumb-1920-303828.jpg');
        background-position: center;
      }

      /* Glassmorphism card effect */
      .card {
        backdrop-filter: blur(25px) saturate(200%);
        -webkit-backdrop-filter: blur(25px) saturate(200%);
        background-color: #33333300;
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.125);
      }

      .form-check,
      label {
        font-size: 14px;
        line-height: 1.42857;
        color: #ffffff;
        font-weight: 400;
      }

      .form-control[readonly] {
        background-color: #55585a5e;
        opacity: 1;
      }



      /* Generated by https://generator.ui.glass/ */
    </style>
    <center>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header card-header-text card-header-warning">
            <div class="card-text">
              <h4 class="card-title">Editar Perfil</h4>
            </div>
          </div>
          <br>
          <?php
          while ($fila = $resultado->fetch_row()) {


          ?>
            <div class="card-header card-header-text card-header-warning">
              <div class="img-rounded">
                <img src="//cdn0.iconfinder.com/data/icons/user-pictures/100/male-256.png" alt="Alex Tkachov" class="img-circle" style="border-radius: 50%;">
                <h1 class="name"><?php echo  $fila["1"]." ".$fila["2"]; ?></h1>
              </div>
            </div>

            <div class="card-body">
              <form class="was-validated" method="POST" action="procesar.php">
                <form class="needs-validation " novalidate>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <input type="hidden" value="<?php echo  $fila["0"]; ?>" name="txtid">
                      <label for="validationCustom01" class="md-label-floating">Nombres</label>
                      <input type="text" class="form-control" id="validationCustom01" value="<?php echo  $fila["1"]; ?>" required minlength="1" maxlength="150" pattern="[a-zA-Z ]+" name="txtnombres">
                      <div class="valid-feedback">
                        ¡Campo Ok!
                      </div>
                      <div class="invalid-feedback">
                        ¡Corregir Campo!
                      </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom02">Apellidos</label>
                      <input type="text" class="form-control" id="validationCustom02" value="<?php echo  $fila["2"]; ?>" required minlength="1" maxlength="150" pattern="[a-zA-Z ]+" name="txtapellidos">
                      <div class="valid-feedback">
                        ¡Campo Ok!
                      </div>
                      <div class="invalid-feedback">
                        ¡Corregir Campo!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom02">Direccion</label>
                      <input type="text" class="form-control" id="validationCustom02" value="<?php echo  $fila["3"]; ?>" required minlength="1" maxlength="150" pattern="[a-zA-Z0-9 ]*$+" name="txtdireccion">
                      <div class="valid-feedback">
                        ¡Campo Ok!
                      </div>
                      <div class="invalid-feedback">
                        ¡Corregir Campo!
                      </div>
                    </div>


                    <div class="col-md-6 mb-3">
                      <label for="validationCustom01" class="md-label-floating">Telefono</label>
                      <input type="text" class="form-control" id="validationCustom01" value="<?php echo  $fila["4"]; ?>" required minlength="1" maxlength="150" pattern="[0-9 ]+" name="txttelefono">
                      <div class="valid-feedback">
                        ¡Campo Ok!
                      </div>
                      <div class="invalid-feedback">
                        ¡Corregir Campo!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom02">Ciudad</label>
                      <input type="text" class="form-control" id="validationCustom02" value="<?php echo  $fila["5"]; ?>" required minlength="1" maxlength="150" pattern="[a-zA-Z ]+" name="txtciudad">
                      <div class="valid-feedback">
                        ¡Campo Ok!
                      </div>
                      <div class="invalid-feedback">
                        ¡Corregir Campo!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom01" class="md-label-floating"> Correo Electronico</label>
                      <input type="email" class="form-control" required name="txtcorreo" value="<?php echo  $fila["6"]; ?>">
                      <div class="valid-feedback">
                        ¡Campo Ok!
                      </div>
                      <div class="invalid-feedback">
                        ¡Corregir Campo!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom02"> Nombre Usuario</label>
                      <input type="text" class="form-control" id="validationCustom01" value="<?php echo  $fila["7"]; ?>" required minlength="5" maxlength="30" pattern="[a-zA-Z0-9 ]+" name="txtnombreusuario">
                      <div class="valid-feedback">
                        ¡Campo Ok!
                      </div>
                      <div class="invalid-feedback">
                        ¡Corregir Campo!
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="examplePassword" class="md-label-floating">Contraseña</label>
                      <input type="password" class="form-control" id="password" title="password" required minlength="5" maxlength="10" name="txtpassword1" value="">
                      <button type="button" id="mostrar" class="btn btn-success btn-fab btn-round">
                        <i class="material-icons">visibility_off</i>
                        <div class="ripple-container">
                        </div>
                      </button>
                      <div class="valid-feedback">
                        ¡Campo Ok!
                      </div>
                      <div class="invalid-feedback">
                        ¡Corregir Campo!
                      </div>
                    </div>
                  </div>
            </div>
            <button type="submit" class="btn btn-success" name="registro">Actualizacion Usuarios </button>
            <a href="/material1/examples/perfil3/crud_principal.php" class="btn btn-warning " role="button" aria-pressed="true">Regresar</a>
            </form>
        </div>
        <script>
      // primero seleccionamos el elemento id del button
      mostrar.addEventListener("mousedown", () => {
        // Eliminamos su type del input
        password.removeAttribute("type");
      });
      mostrar.addEventListener("mouseup", () => {
        // Agregamos type de input
        password.setAttribute("type", "password");
      });
    </script>
      </div>
  <?php
          }
          $resultado->close();
        }
  ?>
  </body>

  </html>