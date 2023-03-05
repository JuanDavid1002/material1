<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //color del texto
    $this->SetTextColor(220,50,50);
    // color de borde del titulo
    $this->SetDrawColor(0,80,180);
    // ancho del borde
     $this->SetLineWidth(1);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(40);
    // Título
    $this->Cell(120,10,'Reporte de Motos de Tipo Sport',1,0,'C');
    // Salto de línea
    $this->Ln(30);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

include'../../../conexion.php';
$consulta="SELECT * FROM tab_motos_sport";
$result = $conn->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
$pdf->Cell(90,-10,'Fecha: '.date('d.m.Y').'',0);
$pdf->Ln(10);
$pdf->Ln(30);
$pdf->Image('img/logo.png',60,22,90);
$pdf->Ln(20);
//color del texto primeros titulos color azul
$pdf->SetTextColor(48, 45, 242);
$pdf->Cell(28,10,'Referencia',1,0,'C');
$pdf->Cell(28,10,'Color',1,0,'C');
$pdf->Cell(28,10,'Modelo',1,0,'C');
$pdf->Cell(28,10,'Marca',1,0,'C');
$pdf->Cell(28,10,'Disponibles',1,0,'C');
$pdf->Cell(28,10,'Vendidas',1,0,'C');
$pdf->Cell(28,10,'Precio',1,1,'C');

 while ($row = $result->fetch_assoc()) {
    //color del texto titulos color negro
    $pdf->SetTextColor(1, 1, 8 );
    $precio=$row["precio"];
    $simbolo='$';
    $pdf->Cell(28,10, $row["referencia_sport"],1,0,'C',0);
    $pdf->Cell(28,10, $row["color_sport"],1,0,'C',0);
    $pdf->Cell(28,10, $row["modelo_sport"],1,0,'C',0);
    $pdf->Cell(28,10, $row["marca_sport"],1,0,'C',0);
    $pdf->Cell(28,10, $row["totalmotos"],1,0,'C',0);
    $pdf->Cell(28,10, $row["salidamotos"],1,0,'C',0);
    $pdf->Cell(28,10, $simbolo.number_format($precio),1,1,'C',0);
}
$pdf->Ln(10);
//color del texto segundos titulos color azul
$pdf->SetTextColor(48, 45, 242);
$pdf->Cell(40,10,'total Disponibles',1,0,'C');
$pdf->Cell(40,10,'total Dinero',1,1,'C');
$consulta1 = "SELECT SUM(totalmotos), FORMAT(SUM(totalmotos*precio),0) FROM tab_motos_sport";
if ($resultado = $conn->query($consulta1)) {
while ($fila = $resultado->fetch_row()) {
    $fila[0]; 
    $fila[1]; 
     //color del texto titulos color negro
     $pdf->SetTextColor(1, 1, 8 );
    $pdf->Cell(40,10, $fila[0],1,0,'C',0);
    $pdf->Cell(40,10, $simbolo.$fila[1],1,1,'C',0);
}
$resultado->close();
}

$pdf->Ln(10);
//color del texto segundos titulos color azul
$pdf->SetTextColor(48, 45, 242);
$pdf->Cell(40,10,'total Vendidas',1,0,'C');
$pdf->Cell(40,10,'total Dinero',1,1,'C');
$consulta1 = "SELECT SUM(salidamotos),  FORMAT(SUM(salidamotos*precio),0) FROM tab_motos_sport";
if ($resultado = $conn->query($consulta1)) {
while ($fila = $resultado->fetch_row()) {
    $fila[0]; 
    $fila[1]; 
     //color del texto titulos color negro
     $pdf->SetTextColor(1, 1, 8 );
    $pdf->Cell(40,10, $fila[0],1,0,'C',0);
    $pdf->Cell(40,10, $simbolo.$fila[1],1,1,'C',0);
}
$resultado->close();
}

$pdf->Output();
?>

<html>
<link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
</html>