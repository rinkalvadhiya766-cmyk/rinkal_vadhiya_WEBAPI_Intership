<?php

require('fpdf.php');

$conn = mysqli_connect("localhost","root","","pdfdemo");

if(!$conn)
{
    die(mysqli_connect_error());
}

$result = mysqli_query(
    $conn,
    "SELECT * FROM receipt ORDER BY amt DESC"
);

$pdf = new FPDF('L','mm','legal');
$pdf->SetAutoPageBreak(true,10);
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Student Payment Records',0,1,'C');
$pdf->Ln(3);

/* Table Header */

$pdf->SetFont('Arial','B',9);

$pdf->Cell(22,10,'Receipt No',1,0,'C');
$pdf->Cell(22,10,'Date',1,0,'C');
$pdf->Cell(30,10,'Student ID',1,0,'C');
$pdf->Cell(55,10,'Student Name',1,0,'C');
$pdf->Cell(20,10,'Code',1,0,'C');
$pdf->Cell(95,10,'Course Name',1,0,'C');
$pdf->Cell(25,10,'Amount',1,1,'C');

$pdf->SetFont('Arial','',8);

while($row = mysqli_fetch_assoc($result))
{
    if($pdf->GetY() > 180)
    {
        $pdf->AddPage();

        $pdf->SetFont('Arial','B',9);

        $pdf->Cell(22,10,'Receipt No',1,0,'C');
        $pdf->Cell(22,10,'Date',1,0,'C');
        $pdf->Cell(30,10,'Student ID',1,0,'C');
        $pdf->Cell(55,10,'Student Name',1,0,'C');
        $pdf->Cell(20,10,'Code',1,0,'C');
        $pdf->Cell(95,10,'Course Name',1,0,'C');
        $pdf->Cell(25,10,'Amount',1,1,'C');

        $pdf->SetFont('Arial','',8);
    }

    $pdf->Cell(22,8,$row['rno'],1);
    $pdf->Cell(22,8,$row['rdate'],1);
    $pdf->Cell(30,8,$row['stud_id'],1);
    $pdf->Cell(55,8,substr($row['stud_nm'],0,30),1);
    $pdf->Cell(20,8,$row['ccode'],1);
    $pdf->Cell(95,8,substr($row['cname'],0,45),1);
    $pdf->Cell(25,8,$row['amt'],1,1,'R');
}

$pdf->Output();

mysqli_close($conn);

?>