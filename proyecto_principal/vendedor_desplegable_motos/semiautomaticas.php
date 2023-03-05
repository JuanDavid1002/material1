<?php
include'../../conexion.php';
$simbolo='$';
$sql1 = "SELECT referencia_semiautomaticas, precio FROM tab_motos_semiautomaticas WHERE referencia_semiautomaticas='Newbest125Fi'";
$result1= $conn->query($sql1);
               if ($result1->num_rows > 0) {
  while($row1 = $result1->fetch_assoc()) {
   $resultado11=$row1["referencia_semiautomaticas"];
   $resultado22=$row1["precio"];
  }
} 
$sql2 = "SELECT referencia_semiautomaticas, precio FROM tab_motos_semiautomaticas WHERE referencia_semiautomaticas='VivaRCoolEuro3'";
$result2= $conn->query($sql2);
               if ($result2->num_rows > 0) {
  while($row2 = $result2->fetch_assoc()) {
   $resultado33=$row2["referencia_semiautomaticas"];
   $resultado44=$row2["precio"];
  }
}
$sql3 = "SELECT referencia_semiautomaticas, precio FROM tab_motos_semiautomaticas WHERE referencia_semiautomaticas='VivaRStyleEuro'";
$result3= $conn->query($sql3);
               if ($result3->num_rows > 0) {
  while($row3 = $result3->fetch_assoc()) {
   $resultado55=$row3["referencia_semiautomaticas"];
   $resultado66=$row3["precio"];
  }
} 
$conn->close();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
  <title>Semiautomaticas</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<section class="slider">
  <div>
    <img src="img/Semiautomaticas/I NEW BEST 125.png"> 
    <div class="desc">
      <h2><?php echo $resultado11;?></h2>
      <p><?php echo $simbolo.number_format($resultado22);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_semiautomaticas_newbest125fi.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Semiautomaticas/VIVA R COOL  EURO 3.png">
    <div class="desc">
      <h2><?php echo $resultado33;?></h2>
      <p><?php echo $simbolo.number_format($resultado44);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_semiautomaticas_vivarcooleuro3.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Semiautomaticas/VIVA R STYLE EURO 3.png">
    <div class="desc">
      <h2><?php echo $resultado55;?></h2>
      <p><?php echo $simbolo.number_format($resultado66);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_semiautomaticas_vivarstyleeuro3.php" class="btn">Mas Informacion</a>
    
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
