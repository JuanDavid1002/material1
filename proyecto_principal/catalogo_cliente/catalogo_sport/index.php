<?php
include'../../../conexion.php';
$simbolo='$';
$consulta = "SELECT referencia_sport, 
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='NewGixxer150';";
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

$consulta2 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='NewGixxerSF150'";
if ($resultado = $conn->query($consulta2)) {

  while ($fila = $resultado->fetch_row()) {
    $resultadoa = $fila[0];
    $resultadob = $fila[1];
    $resultadoc = $fila[2];
    $resultadod = $fila[3];
    $resultadoe = $fila[4];
    $resultadof = $fila[5];
    $resultadog = $fila[6];
    $resultadoh = $fila[7];
  }
  $resultado->close();
}

$consulta3 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='Gixxer250'";
if ($resultado = $conn->query($consulta3)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado1a = $fila[0];
    $resultado2b = $fila[1];
    $resultado3c = $fila[2];
    $resultado4d = $fila[3];
    $resultado5e = $fila[4];
    $resultado6f = $fila[5];
    $resultado7g = $fila[6];
    $resultado8h = $fila[7];
  }
  $resultado->close();
}


$consulta4 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='GixxerSF250'";
if ($resultado = $conn->query($consulta4)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado9i  = $fila[0];
    $resultado10j = $fila[1];
    $resultado11k = $fila[2];
    $resultado12l = $fila[3];
    $resultado13m = $fila[4];
    $resultado14n = $fila[5];
    $resultado15o = $fila[6];
    $resultado16p = $fila[7];
  }
  $resultado->close();
}

$consulta5 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='GSXS150'";
if ($resultado = $conn->query($consulta5)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado17q = $fila[0];
    $resultado18r = $fila[1];
    $resultado19s = $fila[2];
    $resultado20t = $fila[3];
    $resultado21u = $fila[4];
    $resultado22v = $fila[5];
    $resultado23w = $fila[6];
    $resultado24x = $fila[7];
  }
  $resultado->close();
}

$consulta6 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='GSXR150'";
if ($resultado = $conn->query($consulta6)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado25y = $fila[0];
    $resultado26z = $fila[1];
    $resultado27ab = $fila[2];
    $resultado28ac = $fila[3];
    $resultado29ad= $fila[4];
    $resultado30ae = $fila[5];
    $resultado31af= $fila[6];
    $resultado32ag = $fila[7];
  }
  $resultado->close();
}

$consulta7 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='Ax4Euro3'";
if ($resultado = $conn->query($consulta7)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado33ah = $fila[0];
    $resultado34ai = $fila[1];
    $resultado35aj = $fila[2];
    $resultado36ak = $fila[3];
    $resultado37al = $fila[4];
    $resultado38am = $fila[5];
    $resultado39an = $fila[6];
    $resultado40añ = $fila[7];
  }
  $resultado->close();
}

$consulta8 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='Ax4EvolutionEuro3'";
if ($resultado = $conn->query($consulta8)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado41ao = $fila[0];
    $resultado42ap = $fila[1];
    $resultado43aq = $fila[2];
    $resultado44ar = $fila[3];
    $resultado45as= $fila[4];
    $resultado46at= $fila[5];
    $resultado47au= $fila[6];
    $resultado48av = $fila[7];
  }
  $resultado->close();
}

$consulta9 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='Gn125Euro3'";
if ($resultado = $conn->query($consulta9)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado49aw = $fila[0];
    $resultado50ax = $fila[1];
    $resultado51ay = $fila[2];
    $resultado52az = $fila[3];
    $resultado53ba = $fila[4];
    $resultado54bb= $fila[5];
    $resultado55bc = $fila[6];
    $resultado56bd= $fila[7];
  }
  $resultado->close();
}

$consulta10 = "SELECT   referencia_sport,
color_sport, 
modelo_sport, 
precio, 
cilindraje_sport, 
transmision_sport,
motor_sport, 
capacidad_tanque_combustible_sport 
FROM tab_motos_sport WHERE referencia_sport='Gsx125R'";
if ($resultado = $conn->query($consulta10)) {

  while ($fila = $resultado->fetch_row()) {
    $resultado57be = $fila[0];
    $resultado58bf = $fila[1];
    $resultado59bg = $fila[2];
    $resultado50bh = $fila[3];
    $resultado61bi = $fila[4];
    $resultado62bj = $fila[5];
    $resultado63bk = $fila[6];
    $resultado64bl = $fila[7];
  }
  $resultado->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
  <title>Sport</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
              <span class="news-date__txt">1</span>
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
              <img src="img/Sport/New Gixxer 150.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format( $resultadod) ?></span>
              <span class="news-date__txt">2</span>
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
              <img src="img/Sport/GIXXER SF 150 NEGRA.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado4d) ?></span>
              <span class="news-date__txt">3</span>
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
              <img src="img/Sport/gixxer-250-negra.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado12l) ?></span>
              <span class="news-date__txt">4</span>
            </div>
            <div class="news__title">
              <?php echo $resultado9i ?>
            </div>
            <b> Color:</b> <?php echo  $resultado10j ?>
            <b> Modelo:</b> <?php echo $resultado11k ?>
            <b> Cilindraje:</b> <?php echo $resultado13m ?>
            <b> Transmision:</b> <?php echo $resultado14n ?>
            <b> Motor:</b> <?php echo $resultado15o?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado16p ?>
            <div class="news__img">
              <img src="img/Sport/GIXXER-SF-250.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado20t) ?></span>
              <span class="news-date__txt">5</span>
            </div>
            <div class="news__title">
              <?php echo $resultado17q ?>
            </div>
            <b> Color:</b> <?php echo $resultado18r ?>
            <b> Modelo:</b> <?php echo $resultado19s ?>
            <b> Cilindraje:</b> <?php echo $resultado21u ?>
            <b> Transmision:</b> <?php echo $resultado22v ?>
            <b> Motor:</b> <?php echo $resultado23w ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado24x ?>
            <div class="news__img">
              <img src="img/Sport/GSX-S 150.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado28ac) ?></span>
              <span class="news-date__txt">6</span>
            </div>
            <div class="news__title">
              <?php echo $resultado25y ?>
            </div>
            <b> Color:</b> <?php echo $resultado26z ?>
            <b> Modelo:</b> <?php echo $resultado27ab ?>
            <b> Cilindraje:</b> <?php echo $resultado29ad ?>
            <b> Transmision:</b> <?php echo $resultado30ae ?>
            <b> Motor:</b> <?php echo $resultado31af ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado32ag ?>
            <div class="news__img">
              <img src="img/Sport/GSX-R150.png" alt="news">
            </div>
          </a>
        </div>
        
        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo  $simbolo.number_format($resultado36ak) ?></span>
              <span class="news-date__txt">7</span>
            </div>
            <div class="news__title">
              <?php echo $resultado33ah ?>
            </div>
            <b> Color:</b> <?php echo $resultado34ai ?>
            <b> Modelo:</b> <?php echo $resultado35aj?>
            <b> Cilindraje:</b> <?php echo $resultado37al ?>
            <b> Transmision:</b> <?php echo $resultado38am?>
            <b> Motor:</b> <?php echo $resultado39an ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado40añ ?>
            <div class="news__img">
              <img src="img/Sport/AX4  EURO 3 NEGRA.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado44ar) ?></span>
              <span class="news-date__txt">8</span>
            </div>
            <div class="news__title">
              <?php echo $resultado41ao ?>
            </div>
            <b> Color:</b> <?php echo $resultado42ap ?>
            <b> Modelo:</b> <?php echo $resultado43aq ?>
            <b> Cilindraje:</b> <?php echo  $resultado45as ?>
            <b> Transmision:</b> <?php echo $resultado46at ?>
            <b> Motor:</b> <?php echo $resultado47au ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado48av ?>
            <div class="news__img">
              <img src="img/Sport/AX4 EVOLUTION EURO 3.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado50bh) ?></span>
              <span class="news-date__txt">9</span>
            </div>
            <div class="news__title">
              <?php echo $resultado49aw ?>
            </div>
            <b> Color:</b> <?php echo $resultado50ax ?>
            <b> Modelo:</b> <?php echo $resultado51ay ?>
            <b> Cilindraje:</b> <?php echo $resultado53ba ?>
            <b> Transmision:</b> <?php echo $resultado54bb ?>
            <b> Motor:</b> <?php echo $resultado55bc ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado56bd ?>
            <div class="news__img">
              <img src="img/Sport/GN 125 Euro 3.png" alt="news">
            </div>
          </a>
        </div>

        <div class="news-slider__item swiper-slide">
          <a href="#" class="news__item">
            <div class="news-date">
              <span class="news-date__title"><?php echo $simbolo.number_format($resultado4d) ?></span>
              <span class="news-date__txt">10</span>
            </div>
            <div class="news__title">
              <?php echo $resultado57be ?>
            </div>
            <b> Color:</b> <?php echo $resultado58bf ?>
            <b> Modelo:</b> <?php echo $resultado59bg ?>
            <b> Cilindraje:</b> <?php echo  $resultado61bi ?>
            <b> Transmision:</b> <?php echo $resultado62bj ?>
            <b> Motor:</b> <?php echo $resultado63bk ?>
            <b> Capacidad del tanque de combustible:</b> <?php echo $resultado64bl ?>
            <div class="news__img">
              <img src="img/Sport/GSX 125R.png" alt="news">
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
        <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
        </path>
      </symbol>
      <symbol id="icon-arrow-right" viewBox="0 0 32 32">
        <title>arrow-right</title>
        <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
        </path>
      </symbol>
    </defs>
  </svg>
   <!-- Modal -->
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
        <form class="was-validated" method="POST" action="mensajes3.php" >
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
                  <label for="exampleFormControlSelect1">Tipo de Sport</label>
                  <select class="custom-select" required name="txttipos">
                    <option name="idtipos" value="">Seleccionar Tipo de Moto</option>
                    <option name="idtipos" value="NewGixxer150i">NewGixxer150</option>
                    <option name="idtipos" value="NewGixxerSF150">NewGixxerSF150</option>
                    <option name="idtipos" value="Gixxer250">Gixxer250</option>
                    <option name="idtipos" value="GixxerSF250">GixxerSF250</option>
                    <option name="idtipos" value="GSXS150">GSXS150</option>
                    <option name="idtipos" value="GSXR150">GSXR150</option>
                    <option name="idtipos" value="Ax4Euro3">Ax4Euro3</option>
                    <option name="idtipos" value="Ax4EvolutionEuro3">Ax4EvolutionEuro3</option>
                    <option name="idtipos" value="Gn125Euro3">Gn125Euro3</option>
                    <option name="idtipos" value="Gsx125R">Gsx125R</option>
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