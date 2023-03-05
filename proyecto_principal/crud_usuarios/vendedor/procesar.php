<?php
include'../../../conexion.php';

$id = $_POST['txtid'];
$nombres = $_POST['txtnombres'];
$apellidos = $_POST['txtapellidos'];
$idclasificacion = $_POST['txtidclasificacion'];
$direccion = $_POST['txtdireccion'];
$telefono = $_POST['txttelefono'];
$ciudad = $_POST['txtciudad'];
$correo = $_POST['txtcorreo'];

$actualizar = "UPDATE tab_usuarios SET nombres_usuarios='$nombres', apellidos_usuarios='$apellidos', idclasificacionusuarios='$idclasificacion', direccion_usuarios='$direccion', 
telefono_usuarios='$telefono', ciudad_usuarios='$ciudad', correo_usuarios='$correo' WHERE idusuarios='$id'";

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
                        <h4 class="card-title">Registro Motos Automaticas</h4>
                    </div>
                </div>
                <center>
                    <?php
                    if (mysqli_query($conn, $actualizar)) {
                        echo "<h3>Información actualizada satisfactoriamente</h3>";
                    } else {
                        echo "Error actualizando la información: " . mysqli_error($conn);
                    }

                    mysqli_close($conn);

                    ?>
                    <br>
	<button> <a type="submit" name="guardar" class="btn btn-success" href="crud_clientes_vendedor.php">Realizar Otra Actualización </a></button>
                </center>
    </body>

</html>