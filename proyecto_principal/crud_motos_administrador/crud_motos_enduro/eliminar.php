<?php
include'../../../conexion.php';

$id=$_GET['id'];
$eliminar = "DELETE FROM tab_motos_enduro WHERE idmotosenduro='$id' ";


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
    <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-text card-header-warning">
              <div class="card-text">
                <h4 class="card-title">Eliminar Información</h4>
              </div>
            </div>
    <?php
   if (mysqli_query($conn, $eliminar)) {
    echo "<h3>Información se elimino satisfactoriamente</h3>";
} else {
    echo "Error eliminacion la información: " . mysqli_error($conn);
}

mysqli_close($conn);

    ?>
    <br>
    <button><a href="crud_enduro.php" class="btn btn-success">Realizar Otra Operacion</a>
    </button> 
 </body>
 </html>