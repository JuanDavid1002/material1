<?php
include'../../../conexion.php';
$simbolo='$';
$consulta = "SELECT referencia_enduro, 
color_enduro, 
modelo_enduro, 
precio, 
cilindraje_enduro, 
transmision_enduro,
motor_enduro, 
capacidad_tanque_combustible_enduro 
FROM tab_motos_enduro WHERE referencia_enduro='Dr150';";
if ($resultado = $conn->query($consulta)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado1 = $fila[0];
    $resultado2 = $fila[1];
    $resultado3 = $fila[2];
    $resultado4 = $fila[3];
    $resultado5 = $fila[4];
    $resultado6 = $fila[5];
    $resultado7 = $fila[6];
    $resultado8 = $fila[7];
  }
  $resultado->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
  <title>Enduro</title>
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
              <span class="news-date__txt">Enduro</span>
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
              <img src="img/Enduro/DR150.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"></span>
              <span class="news-date__txt"></span>
            </div>
            <div class="news__title">
           
            </div>
            <b> </b> 
            <b></b> 
            <b> </b> 
            <b> </b> 
            <b> </b> 
            <b> </b> 
            <div class="">
              <img src="" alt="">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"></span>
              <span class="news-date__txt"></span>
            </div>
            <div class="news__title">
            
            </div>
            <b></b> 
            <b> </b> 
            <b> </b> 
            <b> </b> 
            <b> </b> 
            <b> </b> 
            <div class="">
              <img src=""
                alt="">
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
<a href="/material1/proyecto_principal/clasificacion_desplegable/index2.php" 
  class="boton" role="button" aria-pressed="true"><b>Regresar</b></a>
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
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
  <script src="./script.js"></script>

</body>

</html>