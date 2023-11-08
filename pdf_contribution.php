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
     $this->Cell(80,10,'Contribution List',1,0,'C');
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
 
 $display_heading = array( 'fullname'=> 'Fullname', 'idcode'=> 'IDCode','address'=> 'Address','phone_number'=> 'Phone Number', 'email'=> 'EMail', 'contri'=> 'Contribution');
 
 $result = mysqli_query($conn, "SELECT Fullname, idcode,address,phone_number,email,contri FROM contribution") or die("database error:". mysqli_error($conn));
 $header = mysqli_query($conn, "SHOW columns FROM contribution");
 
 $pdf = new PDF();
 //header
 $pdf->AddPage();
 //foter page
 $pdf->AliasNbPages();
 $pdf->SetFont('Arial','B',6);
 foreach($header as $heading) {
 $pdf->Cell(33,8,$display_heading[$heading['Field']],1);
 }
 foreach($result as $row) {
 $pdf->Ln();
 foreach($row as $column)
 $pdf->Cell(33,5,$column,1);
 }
 $pdf->Output();

?>