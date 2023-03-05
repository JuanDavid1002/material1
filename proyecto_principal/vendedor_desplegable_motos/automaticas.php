<?php
include'../../conexion.php';
$simbolo='$';
$sql1 = "SELECT referencia_automaticas, precio FROM tab_motos_automaticas WHERE referencia_automaticas='Access 125 Fi'";
$result1= $conn->query($sql1);
               if ($result1->num_rows > 0) {
  while($row1 = $result1->fetch_assoc()) {
   $resultado1=$row1["referencia_automaticas"];
   $resultado2=$row1["precio"];
  }
} 
$sql2 = "SELECT referencia_automaticas, precio FROM tab_motos_automaticas WHERE referencia_automaticas='Andress Fi'";
$result2= $conn->query($sql2);
               if ($result2->num_rows > 0) {
  while($row2 = $result2->fetch_assoc()) {
   $resultado3=$row2["referencia_automaticas"];
   $resultado4=$row2["precio"];
  }
}
$sql3 = "SELECT referencia_automaticas, precio FROM tab_motos_automaticas WHERE referencia_automaticas='Burgman'";
$result3= $conn->query($sql3);
               if ($result3->num_rows > 0) {
  while($row3 = $result3->fetch_assoc()) {
   $resultado5=$row3["referencia_automaticas"];
   $resultado6=$row3["precio"];
  }
} 
$conn->close();
?>
<!DOCTYPE html>
<html lang="en" >
<link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
<head>
  <meta charset="UTF-8">
  <title>Automaticas</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<style>
  
</style>
<!-- partial:index.partial.html -->

<section class="slider">
  <div>
    <img src="img/Automaticas/ACCESS 125 FI.png">
    <div class="desc">
      <h2><?php echo $resultado1;?></h2>
      <p><?php echo $simbolo.number_format($resultado2);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_automatica_acces125fi.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Automaticas/ADDRESS FI.png">
    <div class="desc">
      <h2><?php echo $resultado3;?></h2>
      <p><?php echo $simbolo.number_format($resultado4);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_automatica_addresssfi.php" class="btn">Mas Informacion</a>
    </div>
  </div>

  <div>
    <img src="img/Automaticas/BURGMAN.png">
    <div class="desc">
      <h2><?php echo $resultado5;?></h2>
      <p><?php echo $simbolo.number_format($resultado6);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_automatica_burgman.php" class="btn">Mas Informacion</a>
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
