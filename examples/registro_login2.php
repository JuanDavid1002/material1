<?php
include'../conexion.php';

session_start();
$ingreso=$_POST['txtingreso'];
$clave1=$_POST['txtclave1'];


$estado=1;


$vendedor=2;


if (isset($_POST['login'])) {
   
   $queryusuario2=mysqli_query($conn,"SELECT * FROM tab_usuarios WHERE nombre_usuario='$ingreso' and estado_usuarios='$estado' 
    and idclasificacionusuarios='$vendedor'");
  $columnas=mysqli_num_rows($queryusuario2);
  $buscarpass=mysqli_fetch_array($queryusuario2);

  if (($columnas==1) && (password_verify($clave1,$buscarpass['clave1_usuarios']))) 
  {
      $_SESSION['nombreusuario'] = $ingreso;
   header("Location: ../proyecto_principal/moto_movimiento/index2.html");
  } 
  else
  {
   echo "<script>alert('Usuario o contraseña incorrecta o esta desactivado');window.location='login2.php'</script>";
  }
   
}
?>