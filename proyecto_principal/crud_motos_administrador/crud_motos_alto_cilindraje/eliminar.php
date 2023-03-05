<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbproyectomotos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET['id'];
$eliminar = "DELETE FROM tab_motos_automaticas WHERE idmotosautomaticas='$id' ";

if (mysqli_query($conn, $eliminar)) {
    echo "Información se elimino satisfactoriamente";
} else {
    echo "Error eliminacion la información: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<p><a href="crud_automaticas.php">Realizar Otra Operacion</a></p> 
 </body>
 </html>