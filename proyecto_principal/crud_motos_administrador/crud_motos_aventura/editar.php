<?php
include'../../../conexion.php';
$simbolo="$";
$id = $_GET['id'];
$sql = "SELECT idmotosaventura,referencia_aventura,color_aventura,modelo_aventura,marca_aventura,cantidad_aventura,precio,idclasificaciondemotos FROM tab_motos_aventura
WHERE idmotosaventura='$id' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
        background-image: url('https://images8.alphacoders.com/825/825071.jpg');
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
              <h4 class="card-title">Registro Motos Aventura</h4>
            </div>
          </div>
          <br>
          <?php
          while ($row = $result->fetch_assoc()) {
            $precio=$row["precio"];
          ?>
            <div class="card-body">
              <form class="was-validated" method="POST" action="procesar.php">
                <form class="needs-validation " novalidate>
                  <div class="form-row">
                    <div class="container">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="validationCustom01" class="md-label-floating">Referencia</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo  $row["referencia_aventura"]; ?>" name="txtreferencia" readonly>
                          <div class="valid-feedback">
                            ¡Campo Ok!
                          </div>
                          <div class="invalid-feedback">
                            ¡Corregir Campo!
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="validationCustom02">Color</label>
                          <input type="text" class="form-control" id="validationCustom02" value="<?php echo  $row["color_aventura"]; ?>" name="txtcolor">
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
                          <label for="validationCustom01" class="md-label-floating">Modelo</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo  $row["modelo_aventura"]; ?>" name="txtmodelo">
                          <div class="valid-feedback">
                            ¡Campo Ok!
                          </div>
                          <div class="invalid-feedback">
                            ¡Corregir Campo!
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="validationCustom02">Marca</label>
                          <input type="text" class="form-control" id="validationCustom02" value="<?php echo  $row["marca_aventura"]; ?>" name="txtmarca">
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
                          <label for="validationCustom01" class="md-label-floating">Cantidad</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo  $row["cantidad_aventura"]; ?>" name="txtcantidad">
                          <div class="valid-feedback">
                            ¡Campo Ok!
                          </div>
                          <div class="invalid-feedback">
                            ¡Corregir Campo!
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="validationCustom02">Precio</label>
                          <input type="text" class="form-control" id="validationCustom02" value="<?php echo  
                          $precio; ?>" name="txtprecio">
                          <div class="valid-feedback">
                            ¡Campo Ok!
                          </div>
                          <div class="invalid-feedback">
                            ¡Corregir Campo!
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationCustom01" class="md-label-floating">Clasificacion</label>
                        <input type="text" class="form-control" id="validationCustom01" value="<?php echo  $row["idclasificaciondemotos"]; ?>" name="txtidclasificaciondemotos" readonly>
                        <div class="valid-feedback">
                          ¡Campo Ok!
                        </div>
                        <div class="invalid-feedback">
                          ¡Corregir Campo!
                        </div>
                      </div>

                      <input type="hidden" value="<?php echo  $row["idmotosaventura"]; ?>" name="txtid">
                      <button type="submit" name="guardar" class="btn btn-success">Actualizar</button>
                      <a href="/material1/proyecto_principal/crud_motos_administrador/crud_motos_aventura/crud_aventura.php" class="btn btn-warning " role="button" aria-pressed="true">Regresar</a>
                </form>
            <?php
          }
        }
            ?>
  </body>

  </html>