<?php
 
require('conexion.php');

$folio=$_GET['folio'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$fecha=$_GET['fecha'];
$hora=$_GET['hora'];
$termina=$_GET['termina'];
$hoy=$_GET['hoy'];

 require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('imag/logo.png' , 10 ,8, 40 , 20,'png');

$pdf->Cell(18, 10,'', 0);

$pdf->SetFont('Arial', '', 9);

$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(70, 15, $hoy, 0);
$pdf->Cell(100, 8, 'TICKET DE COMPRA', 0);
$pdf->Ln(14);
$pdf->Cell(15, 15,'', 0);
$pdf->Ln(23);

$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(15, 8, 'FOLIO: '.$folio, 0);
$pdf->Cell(15, 30, '', 0);
$pdf->Ln(16);

$pdf->Cell(15,15,'Titular: '.$nombre. ' ' .$apellido,0);
$pdf->Cell(31,30,'',0);

$pdf->Ln(18);

$pdf->Cell(15,15,'Recervacion: '.$fecha,0);
$pdf->Ln(18);
$pdf->Cell(15,15,'Hora: '.$hora,0);
$pdf->Ln(18);
$pdf->Cell(15,15,'Expira: '.$fecha.' a las: '.$termina.' horas',0);


$pdf->Ln(8);

$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(114,100,'Gracias por su preferencia...',0);





  $pdf->Output('CineIDDSldTicket.pdf','D');
?>