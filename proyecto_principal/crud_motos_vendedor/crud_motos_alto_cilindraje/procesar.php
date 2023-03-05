<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbproyectomotos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_POST['txtid'];
$referencia = $_POST['txtreferencia'];
$color = $_POST['txtcolor'];
$modelo = $_POST['txtmodelo'];
$marca = $_POST['txtmarca'];
$cantidad = $_POST['txtcantidad'];
$precio = $_POST['txtprecio'];
$idclasificaciondemotos = $_POST['txtidclasificaciondemotos'];

$actualizar = "UPDATE tab_motos_semiautomaticas SET referencia_semiautomaticas='$referencia',
color_semiautomaticas='$color',modelo_semiautomaticas='$modelo', marca_semiautomaticas='$marca',
cantidad_semiautomaticas='$cantidad',precio='$precio', idclasificaciondemotos='$idclasificaciondemotos' WHERE idmotossemiautomaticas='$id'";

if (mysqli_query($conn, $actualizar)) {
	echo "Información actualizada satisfactoriamente";
} else {
	echo "Error actualizando la información: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- Material Dashboard CSS -->
	<link rel="stylesheet" href="material-dashboard1.css">
	<script src="dist/sweetalert2.all.min.js"></script>
</head>
<center>
<body>
<div 
class="col-md-6">
          <div class="card">
            <div class="card-header card-header-text card-header-warning">
              <div class="card-text">
                <h4 class="card-title">Registro Motos Semiautomaticas</h4>
              </div>
            </div>
            <br>
	<button> <a type="submit" name="guardar" class="btn btn-success" href="crud_semiautomaticas.php">Realizar Otra Actualización </a></button>
</center>
</body>

</html>