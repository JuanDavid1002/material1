<?php
include'../../conexion.php';
session_start();

$nombres = $_SESSION['nombreusuario'];

$vendedor=2;

$consulta = "SELECT idusuarios, nombres_usuarios, apellidos_usuarios, direccion_usuarios,
telefono_usuarios, ciudad_usuarios, correo_usuarios, nombre_usuario FROM tab_usuarios 
WHERE nombre_usuario='$nombres' and idclasificacionusuarios='$vendedor' ";

if ($resultado = $conn->query($consulta)) {

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
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
      <source src="https://player.vimeo.com/external/365325659.sd.mp4?s=52cfa2c456dad7089673026e88ea6478dca046cf&profile_id=139&oauth2_token_id=57447761 type="video/mp4">
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
              <h4 class="card-title">Editar Perfil</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th COLOR="black">Nombres</th>
                      <th>Apellidos</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Ciudad</th>
                      <th>Correo</th>
                      <th>Nombre Usuario</th>
                      <th class="text-right">operacion</th>
                    </tr>
                  </thead>
                  <?php
                  while ($fila = $resultado->fetch_row()) {
                    $id = $fila[0];
                  ?>
                    <tbody>
                    <tr>
                      <td><?php echo $fila[1]; ?></td>
                      <td><?php echo $fila[2]; ?></td>
                      <td><?php echo $fila[3]; ?></td>
                      <td><?php echo $fila[4]; ?></td>
                      <td><?php echo $fila[5]; ?></td>
                      <td><?php echo $fila[6]; ?></td>
                      <td><?php echo $fila[7]; ?></td>
                      <td class="td-actions text-center">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#staticBackdrop">
                          <a class="td-actions text-center" href="editar.php?id=<?php echo $fila[0]; ?>"><i class="material-icons">edit</i></a>
                        </button>

                  </tbody>
                    </tr>
                <?php
                  }
                  $resultado->close();
                }
                ?>
                </table>
                <a href="/material1/vendedor.php" class="btn btn-danger " role="button" aria-pressed="true">Regresar</a>
      </center>
    </body>

  </html>