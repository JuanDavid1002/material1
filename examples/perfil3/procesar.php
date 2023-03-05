<?php
include'../../conexion.php';

$id = $_POST['txtid'];
$nombres = $_POST['txtnombres'];
$apellidos = $_POST['txtapellidos'];
$direccion = $_POST['txtdireccion'];
$telefono = $_POST['txttelefono'];
$ciudad = $_POST['txtciudad'];
$correo = $_POST['txtcorreo'];
$nombreusuario = $_POST['txtnombreusuario'];
$password1 = $_POST['txtpassword1'];
$opts = ["cost" => 12];
$otro = password_hash($password1, PASSWORD_BCRYPT, $opts);

$actualizar = "UPDATE tab_usuarios SET nombres_usuarios='$nombres', 
apellidos_usuarios='$apellidos',
direccion_usuarios='$direccion',
telefono_usuarios='$telefono',
ciudad_usuarios='$ciudad',
correo_usuarios='$correo',
nombre_usuario='$nombreusuario',
clave1_usuarios='$otro'
 WHERE idusuarios='$id'";

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Editar Perfil</title>
   <!-- Fonts and icons -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <!-- Material Dashboard CSS -->
   <link rel="stylesheet" href="material-dashboard1.css">
   <script src="dist/sweetalert2.all.min.js"></script>

<body>
   <center>
      <div class="col-md-6">
         <div class="card">
            <div class="card-header card-header-text card-header-warning">
               <div class="card-text">
                  <h4 class="card-title">Actualizacion de Usuarios</h4>
               </div>
            </div>

            <?php
            if (mysqli_query($conn, $actualizar)) {
               echo "<h3>Información actualizada satisfactoriamente</h3>";
            } else {
               echo "Error actualizando la información: " . mysqli_error($conn);
            }

            mysqli_close($conn);

            ?>
            <button> <a type="submit" name="guardar" class="btn btn-success" href="/material1/cerrar.php">Realizar Otra Actualización </a></button>
   </center>
</body>

</html>