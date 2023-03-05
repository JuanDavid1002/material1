<?php
include'conexion.php';

/*conteo de automaticas*/
$consulta = "SELECT SUM(totalmotos) FROM tab_motos_automaticas WHERE idclasificaciondemotos='1'";
if ($resultado = $conn->query($consulta)) {
while ($fila = $resultado->fetch_row()) {
    $resultadofinal1=$fila[0];
}
$resultado->close();
}

/*conteo de semiautomaticas*/
$consulta = "SELECT SUM(totalmotos) FROM tab_motos_semiautomaticas WHERE idclasificaciondemotos='2'";
if ($resultado = $conn->query($consulta)) {
while ($fila = $resultado->fetch_row()) {
    $resultadofinal2=$fila[0];
}
$resultado->close();
}

/*conteo de sport*/
$consulta = "SELECT SUM(totalmotos) FROM tab_motos_sport WHERE idclasificaciondemotos='3'";
if ($resultado = $conn->query($consulta)) {
while ($fila = $resultado->fetch_row()) {
    $resultadofinal3=$fila[0];
}
$resultado->close();
}

/*conteo de enduro*/
$consulta = "SELECT SUM(totalmotos) FROM tab_motos_enduro WHERE idclasificaciondemotos='4'";
if ($resultado = $conn->query($consulta)) {
while ($fila = $resultado->fetch_row()) {
    $resultadofinal4=$fila[0];
}
$resultado->close();
}

/*conteo de cruiser*/
$consulta = "SELECT SUM(totalmotos) FROM tab_motos_cruiser WHERE idclasificaciondemotos='5'";
if ($resultado = $conn->query($consulta)) {
while ($fila = $resultado->fetch_row()) {
    $resultadofinal5=$fila[0];
}
$resultado->close();
}

/*conteo de aventura*/
$consulta = "SELECT SUM(totalmotos) FROM tab_motos_aventura WHERE idclasificaciondemotos='6'";
if ($resultado = $conn->query($consulta)) {
while ($fila = $resultado->fetch_row()) {
    $resultadofinal6=$fila[0];
}
$resultado->close();
}
?>