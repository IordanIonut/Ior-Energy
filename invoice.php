<?php
    require('f/fpdf.php');
    session_start();

    $all=$_SESSION['alltest'];
    $pdf=new FPDF();

    $pdf->AddPage();
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(60,5,'Reference Code',0,0);
    $pdf->Cell(60,5,': Cod00'.$all[5],0,0);
    $pdf->Cell(25,5,'Date',0,0);
    $pdf->Cell(60,5,': '.$all[0],0,1);

    $pdf->Cell(60,5,'Amount',0,0);
    $pdf->Cell(60,5,': '.$all[3].' LEI',0,0);
    $pdf->Cell(25,5,'',0,0);
    $pdf->Cell(60,5,'',0,1);

    $pdf->Cell(60,5,'Status',0,0);
    $pdf->Cell(60,5,': Complete',0,0);
    $pdf->Line(10,30,200,30);

    $pdf->Ln(10);
    $pdf->Cell(60,5,'Name Product',0,0);
    $pdf->Cell(60,5,': '.$all[6],0,1);
    $pdf->Cell(60,5,'Model Product',0,0);
    $pdf->Cell(60,5,': '.$all[7],0,1);
    $pdf->Cell(60,5,'Cod Product',0,0);
    $pdf->Cell(60,5,': '.$all[1],0,1);

    $pdf->Cell(60,5,'Tax Amount',0,0);
    $pdf->Cell(60,5,': '.'0%',0,1);
    $pdf->Cell(60,5,'Perce per minute',0,0);
    $pdf->Cell(60,5,': '.$all[4],0,1);
    $pdf->Line(10,60,200,60);

    $pdf->Ln(10);
    $pdf->Cell(60,5,'Start Command',0,0);
    $pdf->Cell(60,5,': '.$all[9],0,1);
    $pdf->Cell(60,5,'Stop Command',0,0);
    $pdf->Cell(60,5,': '.$all[8],0,1);
    $pdf->Line(10,60,200,60);

    $pdf->Line(155,75,195,75);
    $pdf->Ln(5);
    $pdf->Cell(140,5,'',0,0);
    $pdf->Cell(50,5,'  Ior Energy',0,1,'C');
    
    $pdf->Ln(5);$pdf->Ln(5);$pdf->Ln(5);$pdf->Ln(5);$pdf->Ln(5);$pdf->Ln(5);$pdf->Ln(5);$pdf->Ln(5);
    $pdf->Cell(60,5,'Card Number: ',0,0);
    $pdf->Cell(60,5,': '.$all[10],0,1);
    $pdf->Cell(60,5,'Card Name: ',0,0);
    $pdf->Cell(60,5,': '.$all[11],0,1);
    $pdf->Cell(290,5,'Thank you for choosing us!',0,1,'C');

    $pdf->Output();
?>