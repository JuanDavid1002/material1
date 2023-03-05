<?php
include'../../conexion.php';
$simbolo='$';
$sql1 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='NewGixxer150'";
$result1= $conn->query($sql1);
               if ($result1->num_rows > 0) {
  while($row1 = $result1->fetch_assoc()) {
   $resultado1=$row1["referencia_sport"];
   $resultado2=$row1["precio"];
  }
} 
$sql2 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='NewGixxerSF150'";
$result2= $conn->query($sql2);
               if ($result2->num_rows > 0) {
  while($row2 = $result2->fetch_assoc()) {
   $resultado3=$row2["referencia_sport"];
   $resultado4=$row2["precio"];
  }
} 
$sql3 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='Gixxer250'";
$result3= $conn->query($sql3);
               if ($result3->num_rows > 0) {
  while($row3 = $result3->fetch_assoc()) {
   $resultado5=$row3["referencia_sport"];
   $resultado6=$row3["precio"];
  }
} 
$sql4 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='GixxerSF250'";
$result4= $conn->query($sql4);
               if ($result4->num_rows > 0) {
  while($row4 = $result4->fetch_assoc()) {
   $resultado7=$row4["referencia_sport"];
   $resultado8=$row4["precio"];
  }
}
$sql5 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='GSXS150'";
$result5= $conn->query($sql5);
               if ($result5->num_rows > 0) {
  while($row5 = $result5->fetch_assoc()) {
   $resultado9=$row5["referencia_sport"];
   $resultado10=$row5["precio"];
  }
} 
$sql6 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='GSXR150'";
$result6= $conn->query($sql6);
               if ($result6->num_rows > 0) {
  while($row6 = $result6->fetch_assoc()) {
   $resultado11=$row6["referencia_sport"];
   $resultado12=$row6["precio"];
  }
} 
$sql7 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='Ax4Euro3'";
$result7= $conn->query($sql7);
               if ($result7->num_rows > 0) {
  while($row7 = $result7->fetch_assoc()) {
   $resultado13=$row7["referencia_sport"];
   $resultado14=$row7["precio"];
  }
} 
$sql8 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='Ax4EvolutionEuro3'";
$result8= $conn->query($sql8);
               if ($result8->num_rows > 0) {
  while($row8 = $result8->fetch_assoc()) {
   $resultado15=$row8["referencia_sport"];
   $resultado16=$row8["precio"];
  }
} 
$sql9 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='Gn125Euro3'";
$result9= $conn->query($sql9);
               if ($result9->num_rows > 0) {
  while($row9 = $result9->fetch_assoc()) {
   $resultado17=$row9["referencia_sport"];
   $resultado18=$row9["precio"];
  }
} 
$sql10 = "SELECT referencia_sport, precio FROM tab_motos_sport WHERE referencia_sport='Gsx125R'";
$result10= $conn->query($sql10);
               if ($result10->num_rows > 0) {
  while($row10 = $result10->fetch_assoc()) {
   $resultado19=$row10["referencia_sport"];
   $resultado20=$row10["precio"];
  }
} 
$conn->close();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
  <title>Sport</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<section class="slider">
  <div>
    <img src="img/Sport/New Gixxer 150.png">
    <div class="desc">
      <h2><?php echo $resultado1;?></h2>
      <p><?php echo $simbolo.number_format($resultado2);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_newgixxer150.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Sport/GIXXER SF 150 NEGRA.png">
    <div class="desc">
      <h2><?php echo $resultado3;?></h2>
      <p><?php echo $simbolo.number_format($resultado4);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_newgixxersf150.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Sport/gixxer-250-negra.png">
    <div class="desc">
      <h2><?php echo $resultado5;?></h2>
      <p><?php echo $simbolo.number_format($resultado6);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_gixxer250.php" class="btn">Mas Informacion</a>
    </div>
  </div>
  <div>
            
 <div>
    <img src="img/Sport/GIXXER-SF-250.png"> 
    <div class="desc">
      <h2><?php echo $resultado7;?></h2>
      <p><?php echo $simbolo.number_format($resultado8);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_gixxersf250.php" class="btn">Mas Informacion</a>
    </div>
  </div>
        
</section>


<!-- partial:index.partial.html -->

<section class="slider">
   <div>
    <img src="img/Sport/GSX-S 150.png" >
    <div class="desc">
      <h2><?php echo $resultado9;?></h2>
      <p><?php echo $simbolo.number_format($resultado10);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_gsx_s150.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Sport/GSX-R150.png">
    <div class="desc">
      <h2><?php echo $resultado11;?></h2>
      <p><?php echo $simbolo.number_format($resultado12);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_gsx_r150.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Sport/AX4  EURO 3 NEGRA.png">
    <div class="desc">
      <h2><?php echo $resultado13;?></h2>
      <p><?php echo $simbolo.number_format($resultado14);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_ax4euro3.php" class="btn">Mas Informacion</a>
    </div>
  </div>
            
 <div>
    <img src="img/Sport/AX4 EVOLUTION EURO 3.png">
    <div class="desc">
      <h2><?php echo $resultado15;?></h2>
      <p><?php echo $simbolo.number_format($resultado16);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_ax4evolutioneuro3.php" class="btn">Mas Informacion</a>
    </div>
  </div>
        
</section>

<!-- partial:index.partial.html -->

<section class="slider">
<div>
    <div></div>
    <img src="img/Sport/GN 125 Euro 3.png">
    <div class="desc">
      <h2><?php echo $resultado17;?></h2>
      <p><?php echo $simbolo.number_format($resultado18);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_gn125euro3.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Sport/GSX 125R.png">
    <div class="desc">
       <h2><?php echo $resultado19;?></h2>
      <p><?php echo $simbolo.number_format($resultado20);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_sport_gsx125r.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="">
    <div class="desc">
      <h2></h2>
      <p></p>
      <a href="" class=""></a>
    </div>
  </div>
<div>
</section>
<br>
<br>
<center>
<a href="/material1/vendedor.php" class="btn btn-primary btn-success btn-wd btn-warning">Principal</a>
</center>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-1.11.0.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script><script  src="./script.js"></script>

</body>
</html>
