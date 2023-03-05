<?php
include'../../../conexion.php';

$sql = "SELECT idmotossemiautomaticas,referencia_semiautomaticas,color_semiautomaticas,modelo_semiautomaticas,marca_semiautomaticas,totalmotos,precio,idclasificaciondemotos FROM tab_motos_semiautomaticas ORDER BY idmotossemiautomaticas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semiautomaticas</title>
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
            <h4 class="card-title">Semiautomaticas</h4>
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
                    <th class="text-right">operacion</th>
                  </tr>
                </thead>
                <?php
                while ($row = $result->fetch_assoc()) {
                  $row["idmotossemiautomaticas"];
                  $precio=$row["precio"];
                  $simbolo='$';
                ?>
                  <tbody>
                    <tr>
                      <td><?php echo $row["referencia_semiautomaticas"]; ?></td>
                      <td><?php echo  $row["color_semiautomaticas"]; ?></td>
                      <td><?php echo  $row["modelo_semiautomaticas"]; ?></td>
                      <td><?php echo  $row["marca_semiautomaticas"]; ?></td>
                      <td><?php echo  $row["totalmotos"]; ?> </td>
                      <td><?php echo $simbolo.number_format($precio); ?></td>
                      <td><?php echo  $row["idclasificaciondemotos"]; ?></td>
                      <td class="td-actions text-right">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#staticBackdrop">
                          <a class="td-actions text-right" href="editar.php?id=<?php echo $row["idmotossemiautomaticas"]; ?>"><i class="material-icons">edit</i></a>
                        </button>

                  </tbody>
                  </tr>
              <?php
                }
              }
              ?>
              </table>
              <a href="/material1/vendedor.php" class="btn btn-danger " role="button" aria-pressed="true">Regresar</a>

              </center>
    </body>
    <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
        <script>
          $('.carousel').carousel()
        </script>
        <script>
          var video = document.getElementById("myVideo");
          var btn = document.getElementById("myBtn");

          function myFunction() {
            if (video.paused) {
              video.play();
              btn.innerHTML = "Pause";
            } else {
              video.pause();
              btn.innerHTML = "Play";
            }
          }
        </script>
        <script>
          function alert() {
            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
              },
              buttonsStyling: false
            })


            swalWithBootstrapButtons.fire({
              title: '¿Está seguro de que desea guardar los cambios?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Aceptar',
              cancelButtonText: 'Cancelar',
              reverseButtons: true
            }).then((result) => {
              if (result.isConfirmed) {
                swalWithBootstrapButtons.fire(
                  'Guardado!',
                  'Se ha guardado satisfactoriamente',
                  'success'
                )
              } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
              ) {
                swalWithBootstrapButtons.fire(
                  'Cancelado',
                  'No se guardaron los cambios',
                  'error'
                )
              }
            })
          }
        </script>

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </html>