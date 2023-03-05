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
    $this->Cell(120,10,'Reporte de Motos de Tipo Cruiser',1,0,'C');
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
$consulta="SELECT * FROM tab_motos_cruiser";
$result = $conn->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(90,-10,'Fecha: '.date('d.m.Y').'',0);
$pdf->Ln(10);
$pdf->Ln(30);
$pdf->Image('img/logo.png',60,40,90);
$pdf->Ln(40);
//color del texto primeros titulos color azul
$pdf->SetTextColor(48, 45, 242);
$pdf->Cell(32,10,'Referencia',1,0,'C');
$pdf->Cell(32,10,'Color',1,0,'C');
$pdf->Cell(32,10,'Modelo',1,0,'C');
$pdf->Cell(32,10,'Marca',1,0,'C');
$pdf->Cell(32,10,'Disponibles',1,0,'C');
$pdf->Cell(32,10,'Vendidas',1,1,'C');

 while ($row = $result->fetch_assoc()) {
    //color del texto titulos color negro
    $pdf->SetTextColor(1, 1, 8 );
    $pdf->Cell(32,10, $row["referencia_cruiser"],1,0,'C',0);
    $pdf->Cell(32,10, $row["color_cruiser"],1,0,'C',0);
    $pdf->Cell(32,10, $row["modelo_cruiser"],1,0,'C',0);
    $pdf->Cell(32,10, $row["marca_cruiser"],1,0,'C',0);
    $pdf->Cell(32,10, $row["totalmotos"],1,0,'C',0);
    $pdf->Cell(32,10, $row["salidamotos"],1,1,'C',0);
}
$pdf->Ln(20);
//color del texto segundos titulos color azul
$pdf->SetTextColor(48, 45, 242);
$pdf->Cell(64,10,'total de Disponibles',1,0,'C');
$consulta1 = "SELECT SUM(totalmotos) FROM tab_motos_cruiser";
if ($resultado = $conn->query($consulta1)) {
while ($fila = $resultado->fetch_row()) {
    $fila[0]; 
     //color del texto titulos color negro
     $pdf->SetTextColor(1, 1, 8 );
    $pdf->Cell(64,10, $fila[0],1,0,'C',0);
}
$resultado->close();
}

$pdf->Ln(20);
//color del texto segundos titulos color azul
$pdf->SetTextColor(48, 45, 242);
$pdf->Cell(64,10,'total de Vendidas',1,0,'C');
$consulta1 = "SELECT SUM(salidamotos) FROM tab_motos_cruiser";
if ($resultado = $conn->query($consulta1)) {
while ($fila = $resultado->fetch_row()) {
    $fila[0]; 
     //color del texto titulos color negro
     $pdf->SetTextColor(1, 1, 8 );
    $pdf->Cell(64,10, $fila[0],1,0,'C',0);
}
$resultado->close();
}

$pdf->Output();
?>

<html>
<link rel="icon" type="image/png" href="https://logodownload.org/wp-content/uploads/2017/04/suzuki-logo-1-1.png">
</html>