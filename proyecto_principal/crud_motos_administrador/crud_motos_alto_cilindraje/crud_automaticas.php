<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbproyectomotos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT idmotosautomaticas,referencia_automaticas,color_automaticas,modelo_automaticas,marca_automaticas,cantidad_automaticas,precio,idclasificaciondemotos FROM tab_motos_automaticas ORDER BY idmotosautomaticas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
    <title>Automaticas</title>
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
      <source src="https://player.vimeo.com/external/462057783.sd.mp4?s=b1d7985c5a94ca3649f6b0c181ad4384aea31c2a&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
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
              <h4 class="card-title">Automaticas</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                    <th COLOR="black">referencia</th>
                      <th>color</th>
                      <th>modelo</th>
                      <th>marca</th>
                      <th>cantidad</th>
                      <th>precio</th>
                      <th>idclasificaciondemotos</th>
                      <th class="text-right">operacion1</th>
                      <th class="text-right">operacion2</th>
                    </tr>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                      $row["idmotosautomaticas"];
                    ?>
                      <tr>
                        <td><?php echo $row["referencia_automaticas"]; ?></td>
                        <td><?php echo  $row["color_automaticas"]; ?></td>
                        <td><?php echo  $row["modelo_automaticas"]; ?></td>
                        <td><?php echo  $row["marca_automaticas"]; ?></td>
                        <td><?php echo  $row["cantidad_automaticas"]; ?> </td>
                        <td><?php echo  $row["precio"]; ?></td>
                        <td><?php echo  $row["idclasificaciondemotos"]; ?></td>
                        <td class="td-actions text-center">
                          
                          <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#staticBackdrop">
                        <a href="editar.php?id=<?php echo $row["idmotosautomaticas"]; ?>"><i class="material-icons">edit</i></a>
                        </button>

                        <td class="td-actions text-center">

                        <button type="button" class="btn btn-danger btn-round" data-toggle="modal" data-target="#staticBackdrop">
                        <a href="eliminar.php?id=<?php echo $row["idmotosautomaticas"]; ?>"id="borrar"><i class="material-icons">close</i></a>
                        </button>

                       
                  </tbody>
                      </tr>
                  <?php
                    }
                  }
                  ?>
                </table>
      </center>
      <script src="confirmacion.js"></script>
    </body>

  </html>