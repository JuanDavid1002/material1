<?php
include'../../../conexion.php';

$id = $_POST['txtid'];
$referencia = $_POST['txtreferencia'];
$color = $_POST['txtcolor'];
$modelo = $_POST['txtmodelo'];
$marca = $_POST['txtmarca'];
$cantidad = $_POST['txtcantidad'];
$precio = $_POST['txtprecio'];
$idclasificaciondemotos = $_POST['txtidclasificaciondemotos'];

$actualizar = "UPDATE tab_motos_automaticas SET referencia_automaticas='$referencia',
color_automaticas='$color',modelo_automaticas='$modelo', marca_automaticas='$marca',
cantidad_automaticas='$cantidad',precio='$precio', idclasificaciondemotos='$idclasificaciondemotos' WHERE idmotosautomaticas='$id'";



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
                <h4 class="card-title">Motos Sport</h4>
              </div>
            </div>
            <br>
	<?php
	if (mysqli_query($conn, $actualizar)) {
		echo "<h3>Información actualizada satisfactoriamente</h3>";
	} else {
		echo "Error actualizando la información: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);
	?>
<?php  
function select7(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta7()");
$sentencia->execute();
}

function select8(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta8()");
$sentencia->execute();
}

function select9(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta9()");
$sentencia->execute();
}

function select10(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta10()");
$sentencia->execute();
}

function select11(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta11()");
$sentencia->execute();
}

function select12(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta12()");
$sentencia->execute();
}

function select13(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta13()");
$sentencia->execute();
}

function select14(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta14()");
$sentencia->execute();
}

function select15(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta15()");
$sentencia->execute();
}

function select16(){
include'../../../conexion.php';
$sentencia = $conn->prepare("CALL resta16()");
$sentencia->execute();
}
?> 
	<br>
		<input type="submit" name="select" class="btn btn-success btn-lg" value="Realizar Otra Actualización" onclick="funcion(), location.href='crud_sport.php'"/>
</center>

<script>
  function funcion(){
    document.write('<?php echo select7(), select8(), select9(), select10(), select11(), select12(), 
    	select13(), select14(), select15(), select16(); ?>');
  }
  </script>
</body>

</html>