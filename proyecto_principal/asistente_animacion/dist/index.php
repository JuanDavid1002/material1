<?php
include'../conexion.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Asistentente Animacion</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<aside class="profile-card">
  
  <header>
    
    <!-- here’s the avatar -->

    <a target="_blank" >  
      <center>
      <img src="https://www.dropbox.com/s/9upq789hxnhs361/ava.gif?raw=1" >
      <div class="first_circle"class="first_div">
       <div class="second_div"class="fond"></div>
    </center>
    </a>

    <!-- the username -->
    <h1>Bienvenido <?php echo $_SESSION['nombreusuario']; ?>!</h1>
    
    <!-- and role or location -->
    <h2></h2>
    
  </header>
  
  <!-- bit of a bio; who are you? -->
  <div class="profile-bio">
    
    <p>Aqui podras ver tu moto adecuada</p>
    
  </div>
  
  
  
</aside>
<!-- that’s all folks! -->
<!-- partial -->
  
</body>
</html>
