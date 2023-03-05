<?php
include'../../../conexion.php';
$simbolo='$';
$consulta = "SELECT referencia_semiautomaticas, color_semiautomaticas, 
modelo_semiautomaticas, precio, cilindraje_semiautomaticas, 
transmision_semiautomaticas, motor_semiautomaticas, 
capacidad_tanque_combustible_semiautomaticas 
FROM tab_motos_semiautomaticas WHERE referencia_semiautomaticas='Newbest125Fi';";
if ($resultado = $conn->query($consulta)) {

  while ($fila = $resultado->fetch_row()) {
      $resultado1=$fila[0];
      $resultado2=$fila[1];
      $resultado3=$fila[2];
      $resultado4=$fila[3];
      $resultado5=$fila[4];
      $resultado6=$fila[5];
      $resultado7=$fila[6];
      $resultado8=$fila[7];
  }
  $resultado->close();
  }

  $consulta2 = "SELECT   referencia_semiautomaticas,
color_semiautomaticas,
modelo_semiautomaticas,
precio,
cilindraje_semiautomaticas,
transmision_semiautomaticas,
motor_semiautomaticas,
capacidad_tanque_combustible_semiautomaticas
FROM tab_motos_semiautomaticas WHERE referencia_semiautomaticas='VivaRCoolEuro3'";
if ($resultado = $conn->query($consulta2)) {

  while ($fila = $resultado->fetch_row()) {
    $resultadoa=$fila[0];
    $resultadob=$fila[1];
    $resultadoc=$fila[2];
    $resultadod=$fila[3];
    $resultadoe=$fila[4];
    $resultadof=$fila[5];
    $resultadog=$fila[6];
    $resultadoh=$fila[7];
  }
  $resultado->close();
  }

  $consulta3 = "SELECT   referencia_semiautomaticas,
color_semiautomaticas,
modelo_semiautomaticas,
precio,
cilindraje_semiautomaticas,
transmision_semiautomaticas,
motor_semiautomaticas,
capacidad_tanque_combustible_semiautomaticas
FROM tab_motos_semiautomaticas WHERE referencia_semiautomaticas='VivaRStyleEuro'";
if ($resultado = $conn->query($consulta3)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado1a=$fila[0];
    $resultado2b=$fila[1];
    $resultado3c=$fila[2];
    $resultado4d=$fila[3];
    $resultado5e=$fila[4];
    $resultado6f=$fila[5];
    $resultado7g=$fila[6];
    $resultado8h=$fila[7];
  }
  $resultado->close();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Semiautomaticas</title>
  <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
  <link rel="stylesheet" href="./style.css">
<style type="text/css">
  .boton {
    padding: 4px 25px;
    background: #FF9100;
    border: 1px solid #1161B0;
    color: #fff;
    border-radius: 4px;
    text-decoration:none;
}
  </style>
</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="wrapper">
    <div class="background">
      <img src="https://images.hdqwalls.com/wallpapers/2021-suzuki-hayabusa-eg.jpg" alt="">
    </div>
    <div class="item-bg"></div>

    <div class="news-slider">
      <div class="news-slider__wrp swiper-wrapper">
        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado4) ?></span>
              <span class="news-date__txt">Semiautomaticas</span>
            </div>
            <div class="news__title">
              <?php echo $resultado1 ?>
            </div>
            <b> Color:</b> <?php echo $resultado2 ?> 
            <b> Modelo:</b> <?php echo $resultado3 ?>
            <b> Cilindraje:</b> <?php echo $resultado5 ?>
            <b> Transmision:</b> <?php echo $resultado6 ?>
            <b> Motor:</b> <?php echo $resultado7 ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado8 ?>
            <div class="news__img">
              <img src="img/Semiautomaticas/I NEW BEST 125.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultadod) ?></span>
              <span class="news-date__txt">Semiautomaticas</span>
            </div>
            <div class="news__title">
            <?php echo $resultadoa ?>
            </div>
            <b> Color:</b> <?php echo $resultadob ?> 
            <b> Modelo:</b> <?php echo $resultadoc ?>
            <b> Cilindraje:</b> <?php echo $resultadoe ?>
            <b> Transmision:</b> <?php echo $resultadof ?>
            <b> Motor:</b> <?php echo $resultadog ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultadoh ?>
            <div class="news__img">
              <img src="img/Semiautomaticas/VIVA R COOL  EURO 3.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado4d) ?></span>
              <span class="news-date__txt">Semiautomaticas</span>
            </div>
            <div class="news__title">
            <?php echo $resultado1a ?>
            </div>
            <b> Color:</b> <?php echo $resultado2b ?> 
            <b> Modelo:</b> <?php echo $resultado3c ?>
            <b> Cilindraje:</b> <?php echo $resultado5e ?>
            <b> Transmision:</b> <?php echo $resultado6f ?>
            <b> Motor:</b> <?php echo $resultado7g ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado8h ?>
            <div class="news__img">
              <img src="img/Semiautomaticas/VIVA R STYLE EURO 3.png"
                alt="news">
            </div>
          </a>
        </div>
      </div>
    
      <div class="news-slider__ctr">

        <div class="news-slider__arrows">
          <button class="news-slider__arrow news-slider-prev">
            <span class="icon-font">
              <svg class="icon icon-arrow-left">
                <use xlink:href="#icon-arrow-left"></use>
              </svg>
            </span>
          </button>
          <button class="news-slider__arrow news-slider-next">
            <span class="icon-font">
              <svg class="icon icon-arrow-right">
                <use xlink:href="#icon-arrow-right"></use>
              </svg>
            </span>
          </button>
        </div>
    <br>
    <br>
    <br>
<div>
   <center>
<a href="/material1/proyecto_principal/clasificacion_desplegable/index.php" 
  class="boton" role="button" aria-pressed="true"><b>Regresar</b></a>

   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ventana1" id="boton1">
  Registre su moto de interes
</button>
   </center>
    </div>
        <div class="news-slider__pagination"></div>

      </div>

    </div>

  </div>

  <svg hidden="hidden">
    <defs>
      <symbol id="icon-arrow-left" viewBox="0 0 32 32">
        <title>arrow-left</title>
        <path
          d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
        </path>
      </symbol>
      <symbol id="icon-arrow-right" viewBox="0 0 32 32">
        <title>arrow-right</title>
        <path
          d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
        </path>
      </symbol>
    </defs>
  </svg>
  <div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Moto de Interes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="was-validated" method="POST" action="mensajes2.php" >
              <form class="needs-validation " novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01" class="md-label-floating">Nombres</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required minlength="1"
                      maxlength="150" pattern="[a-zA-Z ]+" name="txtnombres">
                    <div class="valid-feedback">
                      ¡Campo Ok!
                    </div>
                    <div class="invalid-feedback">
                      ¡Corregir Campo!
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom02">Apellidos</label>
                    <input type="text" class="form-control" id="validationCustom02" value="" required minlength="1"
                      maxlength="150" pattern="[a-zA-Z ]+" name="txtapellidos">
                    <div class="valid-feedback">
                      ¡Campo Ok!
                    </div>
                    <div class="invalid-feedback">
                      ¡Corregir Campo!
                    </div>
                  </div>
                </div>
                <div class="form-group" class>
                    <label for="validationCustom01" class="md-label-floating">Número Contacto</label>
                    <input type="text" class="form-control" id="validationCustom01" value="" required minlength="1"
                      maxlength="150" pattern="[0-9 ]+" name="txttelefono">
                    <div class="valid-feedback">
                      ¡Campo Ok!
                    </div>
                    <div class="invalid-feedback">
                      ¡Corregir Campo!
                    </div>
                 </div>
                <div class="form-group" class>
                  <label for="exampleFormControlSelect1">Tipo de Semiautomaticas</label>
                  <select class="custom-select" required name="txttipos">
                    <option name="idtipos" value="">Seleccionar Tipo de Moto</option>
                    <option name="idtipos" value="Newbest125Fi">Newbest125Fi </option>
                    <option name="idtipos" value="VivaRCoolEuro3">VivaRCoolEuro3</option>
                    <option name="idtipos" value="VivaRStyleEuro">VivaRStyleEuro</option>
                  </select>
                  <div class="invalid-feedback">Tipo no seleccionada</div>
                </div>
                <br>
                 
            
                <button type="submit" class="btn btn-success" name="registro">Nuevo Interes Moto </button>
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
  <script src="./script.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>