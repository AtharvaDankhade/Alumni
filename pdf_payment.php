<?php
 include 'partial/db.php'; 
 include 'fpdf.php';
 
 class PDF extends FPDF
 {
 // Page header
 function Header()
 {
     // Logo
     $this->SetFont('Arial','B',13);
     // Move to the right
     $this->Cell(50);
     // Title
     $this->Cell(80,10,'Payment List',1,0,'C');
     // Line break
     $this->Ln(20);
 }
 
 // Page footer
 function Footer()
 {
     // Position at 1.5 cm from bottom
     $this->SetY(-15);
     // Arial italic 8
     $this->SetFont('Arial','I',8);
     // Page number
     $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
 }
 }
 
 $display_heading = array( 'id'=> 'ID', 'name'=> 'Name','amount'=> 'Amount','payment_status'=> 'Payment Status', 'payment_id'=> 'Payment Id', 'added_on'=> 'Added On Date', 'Organition'=> 'Organition', 'Designation'=> 'Designation', 'PNumber'=> 'PNumber', 'EMail'=> 'EMail','Pass'=> 'Pass');
 
 $result = mysqli_query($conn, "SELECT id, name, amount,payment_status,payment_id,added_on FROM payment") or die("database error:". mysqli_error($conn));
 $header = mysqli_query($conn, "SHOW columns FROM payment");
 
 $pdf = new PDF();
 //header
 $pdf->AddPage();
 //foter page
 $pdf->AliasNbPages();
 $pdf->SetFont('Arial','B',7);
 foreach($header as $heading) {
 $pdf->Cell(28,8,$display_heading[$heading['Field']],1);
 }
 foreach($result as $row) {
 $pdf->Ln();
 foreach($row as $column)
 $pdf->Cell(28,6,$column,1);
 }
 $pdf->Output();

?>