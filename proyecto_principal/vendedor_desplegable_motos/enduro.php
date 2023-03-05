<?php
include'../../conexion.php';
$simbolo='$';
$sql1 = "SELECT referencia_enduro, precio FROM tab_motos_enduro WHERE referencia_enduro='Dr150'";
$result1= $conn->query($sql1);
               if ($result1->num_rows > 0) {
  while($row1 = $result1->fetch_assoc()) {
   $resultado1=$row1["referencia_enduro"];
   $resultado2=$row1["precio"];
  }
} 

$conn->close();
?>
<!DOCTYPE html>
<html lang="en" >
<link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
<head>
  <meta charset="UTF-8">
  <title>Enduro</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<section class="slider">
  <div>
    <img src="img/Enduro/DR150.png">
    <div class="desc">
     <h2><?php echo $resultado1;?></h2>
      <p><?php echo $simbolo.number_format($resultado2);?></p>
      <a href="/material1/proyecto_principal/info_motos_vendedor/info_enduro_dr150.php" class="btn">Mas Informacion</a>
    </div>
  </div>
  <div>
    <img src="">
    <div class="desc">
      <h2></h2>
      <p></p>
      <a href="#" class=""></a>
    </div>
  </div>
 <div>
    <img src="">
    <div class="desc">
      <h2></h2>
      <p></p>
      <a href="#" class=""></a>
    </div>
  </div>
  <div>
    <img src="">
    <div class="desc">
      <h2></h2>
      <p></p>
      <a href="#" class=""></a>
    </div>
  </div>
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