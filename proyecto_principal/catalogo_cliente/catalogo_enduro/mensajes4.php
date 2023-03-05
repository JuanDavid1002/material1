<?php
include'../../../conexion.php';
$stmt = $conn->prepare("CALL ingresar_mensajes (?,?,?,?)");
$stmt->bind_param("ssss", $nombres,$apellidos,$telefono,$tipos);

$nombres=$_POST['txtnombres'];
$apellidos=$_POST['txtapellidos'];
$telefono=$_POST['txttelefono'];
$tipos=$_POST['txttipos'];

$stmt->execute();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="material-dashboard1.css">
    <script src="dist/sweetalert2.all.min.js"></script>
	<title>Document</title>
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
<center>
    <body>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-text card-header-warning">
                    <div class="card-text">
                        <h4 class="card-title">Registro Motos</h4>
                    </div>
                </div>
                <br>
	<br>
	<h2><b>Registrado Satisfactoriamente</b></h2>
	<br>
	<br>
	<a href="index.php" 
  class="boton" role="button" aria-pressed="true"><b>Regresar</b></a>
	</center>
</body>
</html>