<?php 
require 'fpdf/fpdf.php';

$pdf = new fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(190, 10, utf8_decode('Historia Medico Deportivo'), 0, 0,'C');

//$this->Ln(20);
$pdf->Output();



?>