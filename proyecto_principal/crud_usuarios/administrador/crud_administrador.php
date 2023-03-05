<?php
include'../../../conexion.php';

$sql = "SELECT idusuarios, nombres_usuarios, apellidos_usuarios, genero_usuarios, idclasificacionusuarios, tipo_documento_usuarios, numero_documento_usuarios,direccion_usuarios, 
telefono_usuarios, ciudad_usuarios, correo_usuarios, nombre_usuario, observaciones_usuarios, clave1_usuarios, estado_usuarios FROM tab_usuarios ORDER BY idusuarios";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="material-dashboard1.css">
    <script src="dist/sweetalert2.all.min.js"></script>
  </head>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial;
      font-size: 17px;
    }

    #myVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
    }

    .content {
      position: fixed;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      color: #f1f1f1;
      width: 100%;
      padding: 20px;
    }

    #myBtn {
      width: 200px;
      font-size: 18px;
      padding: 10px;
      border: none;
      background: #000;
      color: #fff;
      cursor: pointer;
    }

    #myBtn:hover {
      background: #ddd;
      color: black;
    }
  </style>

  <body>
    <video autoplay muted loop id="myVideo">
      <source src="https://player.vimeo.com/external/609097865.sd.mp4?s=f1b681b142d525cadeb606e3dc6e90755a8ef646&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <body class="dark-edition">
      <center>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title">Tabla de Clientes</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th COLOR="black">Nombres</th>
                      <th>Apellidos</th>
                      <th>Genero</th>
                      <th>Clasificacion Usuarios</th>
                      <th>Tipo Documento</th>
                      <th>Numero Documento</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Ciudad</th>
                      <th>Correo</th>
                      <th>Nombre Usuario</th>
                      <th>Observaciones</th>
                      <th>Clave</th>
                      <th>Estado Usuarios</th>
                      <th class="text-right">Editar</th>
                      <th class="text-right">Borrar</th>
                      <th class="text-right">Bloquear</th>
                    </tr>
                  </thead>
                  <?php
                  while ($row = $result->fetch_assoc()) {
                    $row["idusuarios"];
                  ?>
                    <tr>
                      <td><?php echo $row["nombres_usuarios"]; ?></td>
                      <td><?php echo  $row["apellidos_usuarios"]; ?></td>
                      <td><?php echo  $row["genero_usuarios"]; ?></td>
                      <td><?php echo  $row["idclasificacionusuarios"]; ?></td>
                      <td><?php echo  $row["tipo_documento_usuarios"]; ?> </td>
                      <td><?php echo  $row["numero_documento_usuarios"]; ?></td>
                      <td><?php echo  $row["direccion_usuarios"]; ?></td>
                      <td><?php echo  $row["telefono_usuarios"]; ?></td>
                      <td><?php echo  $row["ciudad_usuarios"]; ?></td>
                      <td><?php echo  $row["correo_usuarios"]; ?></td>
                      <td><?php echo  $row["nombre_usuario"]; ?></td>
                      <td><?php echo  $row["observaciones_usuarios"]; ?></td>
                      <td><?php echo  $row["clave1_usuarios"]; ?></td>
                      <td><?php echo  $row["estado_usuarios"]; ?></td>
                      <td class="td-actions text-text-center">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#staticBackdrop">
                          <a class="td-actions text-center" href="editar.php?id=<?php echo $row["idusuarios"]; ?>"id="editar"><i class="material-icons">edit</i></a>
                        </button>

                        <td class="td-actions text">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning btn-round" data-toggle="modal" data-target="#staticBackdrop">
                          <a class="td-actions text-center" href="eliminar.php?id=<?php echo $row["idusuarios"]; ?>" id="borrar"><i class="material-icons">highlight_off</i></a>
                        </button>

                        <td class="td-actions text">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#staticBackdrop">
                          <a class="td-actions ttext-center" href="editar2.php?id=<?php echo $row["idusuarios"]; ?>" id="bloquear"><i class="material-icons">block</i></a>
                        </button>
                        

                     

                    </tr>

                <?php
                  }
                }
                ?>
                </table>
                <a href="/material1/template.php" class="btn btn-danger " role="button" aria-pressed="true">Regresar</a>

      </center>
    </body>

  </html>