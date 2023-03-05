<?php
include'../../conexion.php';
$simbolo='$';
$sql1 = "SELECT   referencia_semiautomaticas,
                  color_semiautomaticas,
                  modelo_semiautomaticas,
                  precio,
                  cilindraje_semiautomaticas,
                  transmision_semiautomaticas,
                  motor_semiautomaticas,
                  capacidad_tanque_combustible_semiautomaticas,
                  totalmotos
 FROM tab_motos_semiautomaticas WHERE referencia_semiautomaticas='VivaRStyleEuro'";
$result1= $conn->query($sql1);
               if ($result1->num_rows > 0) {
  while($row = $result1->fetch_assoc()) {
   $resultado1=$row["referencia_semiautomaticas"];
   $resultadob=$row["color_semiautomaticas"];
   $resultado3=$row["modelo_semiautomaticas"];
   $resultado4=$row["precio"];
   $resultado5=$row["cilindraje_semiautomaticas"];
   $resultado6=$row["transmision_semiautomaticas"];
   $resultado7=$row["motor_semiautomaticas"];
   $resultado8=$row["capacidad_tanque_combustible_semiautomaticas"];
   $resultadoe=$row["totalmotos"];
  
  }
} 
if($resultado2=1)
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Material Dashboard CSS -->
  <link rel="stylesheet" href="material-dashboard.css">
  <title>Access 125 Fi</title>

  <style>
    /* Glassmorphism card effect */
    .card {
      backdrop-filter: blur(16px) saturate(180%);
      -webkit-backdrop-filter: blur(16px) saturate(180%);
      background-color: rgba(17, 25, 40, 0.75);
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.125);
    }
    a{
  border-radius: 5px;
  padding: 10px 7px;
  text-decoration: none;
  color: #fff;
  background-color: #333;
  margin: 5px;
}
  </style>
</head>

<!-- partial:index.partial.html -->
<section class="showcase ">
  <div class="video-container">
    <video
      src="https://player.vimeo.com/external/602915659.hd.mp4?s=193ca5ebcd1f7f02a3255bb6761f27176bd43564&profile_id=174"
      autoplay muted loop></video>
  </div>

  <div class="content">
    <div class="container-fluid py-5">
      <div class="row mt-4">
        <div class="col">
          <div class="card">

            <img src="img/waves-white.svg" alt="position-absolute"
              class="position-absolute opacity-2 start-0 top-0 w-100">
            <img class="w-75 mt-n7 mt-lg-n8 d-none d-md-block mx-auto z-index-1" src="img/Semiautomaticas/VIVA R STYLE EURO 3.png"
              alt="car image">
            <div class="card-body px-5 z-index-1 bg-cover overflow-hidden pb-2">
              <div class="row">
                <div class="col-12 text-center">
                  <div class="row">
                    <div class="col-lg-4 col-12">
                      <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">REFERENCIA</p>
                      <hr class="horizontal light mt-1 mb-3">
                      <div class="d-flex justify-content-center">
                        <div>
                          <h3 class="text-white"><?php echo $resultado1;?></small></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-12">
                      <h4 class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">Cantidad</h4>
                      <hr class="horizontal light mt-1 mb-3">
                      <div class="d-flex justify-content-center">
                        <div>
                          <h3 class="mb-0 text-white"><?php echo $resultadoe;?></h3>
                        </div>
                        <div class="ms-lg-6 ms-4">
                        </div>
                      </div>
                    </div>
                  
                    <div class="col-lg-6 col-12">
                      <h4 class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">Modelo</h4>
                      <hr class="horizontal light mt-1 mb-3">
                      <div class="d-flex justify-content-center">
                        <div>
                          <h3 class="mb-0 text-white"><?php echo $resultado3;?></h3>
                        </div>
                        <div class="ms-lg-6 ms-4">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a href="/material1/preventa_automaticas/formulario_salidas_semiautomaticas6.php" class="btn-success" >Precompra</a>
            <a href="/material1/proyecto_principal/vendedor_desplegable_motos/semiautomaticas.php" class="btn btn-info"><b>Atras</b></a>
          </div>
        </div>
       
        <div class="col-lg-5">
          <div class="row">
            <div class="col-md-12">
              <div class="card bg-gradient-danger mb-4 mt-4 mt-lg-0">
                <div class="card-body pb-4">
                  <div class="row">
                    <div class="col-5 my-auto">
                      <div class="numbers">
                        <p class="text-white text-sm mb-0 text-capitalize font-weight-bold opacity-7">Precio</p>
                        <h5 class="text-white font-weight-bolder mb-0">
                          <?php echo $simbolo.number_format($resultado4);?>
                        </h5>
                      </div>
                    </div>
                    <div class="col-4 text-end">
                      <img class="w-50" src="https://seeklogo.com/images/S/Suzuki-logo-1298046A2E-seeklogo.com.png"
                        alt="image sun">
                      <h4 class="mb-0 text-white text-end me-1">Automatica</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row"></div>
              <div style="width: 14rem;"></div>
              <div class="card">
                <div class="card-header card-header-icon card-header-">
                  <div class="card-icon">
                    <i class="material-icons">palette</i>
                  </div>
                  <h5 class="card-category">Color</h5>
                  <h4 class="card-title"><?php echo $resultadob;?></h4>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row"></div>
              <div style="width: 14rem;"></div>
              <div class="card">
                <div class="card-header card-header-icon card-header-success">
                  <div class="card-icon">
                    <i class="material-icons">two_wheeler</i>
                  </div>
                  <h5 class="card-category ">Cilindraje</h5>
                  <h4 class="card-title"><?php echo $resultado5;?></h4>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>

            <div class="col">
              <div class="row"></div>
              <div style="width: 30rem;"></div>
              <div class="card">
                <div class="card-header card-header-icon card-header-info">
                  <div class="card-icon">
                    <i class="material-icons">settings</i>
                  </div>
                  <h5 class="card-category text-center">Transmision</h5>
                  <h4 class="card-title text-center"><?php echo $resultado6;?></h4>
                </div>
                <div class="card-footer">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row"></div>
          <div style="width: 14rem;"></div>
          <div class="card">
            <div class="card-header card-header-icon card-header-warning">
              <div class="card-icon">
                <i class="material-icons">two_wheeler</i>
              </div>
              <h5 class="card-category text-center">Motor</h5>
              <h4 class="card-title text-center"><?php echo $resultado7;?></h4>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row"></div>
          <div style="width: 14rem;"></div>
          <div class="card">
            <div class="card-header card-header-icon card-header-danger">
              <div class="card-icon">
                <i class="material-icons">settings</i>
              </div>
              <center>
                <h5 class="card-category text-center">Capacidad tanque combustible</h5>
                <h4 class="card-title text-center"><?php echo $resultado8;?></h4>
              </center>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- partial -->

</body>

</html>