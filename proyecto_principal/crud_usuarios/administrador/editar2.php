<?php
include'../../../conexion.php';

$id = $_GET['id'];
$sql = "SELECT idusuarios, nombres_usuarios, apellidos_usuarios, observaciones_usuarios, estado_usuarios 
FROM tab_usuarios
WHERE idusuarios='$id' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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
        background-image: url('https://www.teahub.io/photos/full/29-295735_gsx-r-750-2011-fondo-de-escritorio-wallpaper.jpg');
        background-position: center;
      }

      /* Glassmorphism card effect */
      .card {
        backdrop-filter: blur(25px) saturate(200%);
        -webkit-backdrop-filter: blur(25px) saturate(200%);
        background-color: #78787800;
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


      /* Generated by https://generator.ui.glass/ */
    </style>
    <center>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header card-header-text card-header-danger">
            <div class="card-text">
              <h4 class="card-title"> Formulario Actualizaci??n Usuarios</h4>
            </div>
          </div>
          <br>
          <div class="card-body">
            <div class="card">
              <div class="card-header card-header-text card-header-success">
                <div class="card-text">
                  <h4 class="card-title"> Formulario Actualizaci??n Usuarios</h4>
                  <?php
                  while ($row = $result->fetch_assoc()) {
                  ?>
                    <div>
                      <h1>Nombre Cliente</h1>
                      <?php
                      echo  "<h2>" . $row["nombres_usuarios"] . " " . $row["apellidos_usuarios"] . "</h2>";
                      ?>
                    </div>
                   
                    <form class="was-validated" method="POST" action="procesar2.php">
                      <form class="needs-validation " novalidate>
                        <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <input type="hidden" value="<?php echo  $row["idusuarios"]; ?>" name="txtid">
                          </div>
                        </div>
                </div>
              </div>
            </div>
            <br> 
            <br>
            <center> 
              
            <div class="form-row">
              <div class="col">
                <label for="validationCustom02">Observaciones</label>
                <input type="text" class="form-control" id="validationCustom02" value="<?php echo  $row["observaciones_usuarios"]; ?>" required minlength="1" maxlength="150" pattern="[a-zA-Z ]+" name="txtobservaciones">
                <div class="valid-feedback">
                  ??Campo Ok!
                </div>
                <div class="invalid-feedback">
                  ??Corregir Campo!
                </div>
              </div>
            </div>
            </center>
            <div class="form-group" class>
              <label for="exampleFormControlSelect1">Estado de Usuario</label>
              <select class="custom-select" required name="txtestado">
                <option name="estado" value="">Seleccionar Estado</option>
                <option name="estado" value="1">Activo</option>
                <option name="estado" value="0">Desactivado</option>
              </select>
              <div class="invalid-feedback">Cargo no seleccionada</div>
            </div>
          </div>
          <br>
          <br>
        
          <button type="submit" class="btn btn-danger" name="registro">Actualizacion Usuarios </button><a href="/material1/proyecto_principal/crud_usuarios/administrador/crud_administrador.php" class="btn btn-info " role="button" aria-pressed="true">Regresar</a>
        </form>
        </div>
    <?php
                  }
                }
    ?>
  </body>

  </html>