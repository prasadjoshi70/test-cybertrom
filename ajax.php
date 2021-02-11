<?php
include("includes/connection.php");
include("includes/common.php");
require('fpdf.php');

$id=isset($_REQUEST["id"])?$_REQUEST["id"]:"0";

$query3 = "SELECT * FROM people WHERE id = $id";
$result3 = mysqli_query($conn, $query3);
$dept1 = '';
$fname = '';
$lname = '';
$address = '';
$email = '';
while($row3 = mysqli_fetch_object($result3))
{ 
    $dept1 = $UPLOAD_URL.$row3->photo;
    $fname= $row3->fname;
    $lname = $row3->lname;
    $address = $row3->address;
    $email = $row3->email;
}   
$pdf=new FPDF();
$pdf->AddPage();
//$pdf->Image($dept1,10,8,50,50);
$pdf->Image($dept1,140,30,50,50);
$pdf->SetFont('Helvetica','B',15);
$pdf->SetXY(50, 10);
$pdf->MultiCell( 200, 40, '', 0);
$pdf->MultiCell( 200, 20, 'First Name: '.$fname, 0);
$pdf->MultiCell( 200, 20, 'Last Name: '.$lname, 0);
$pdf->MultiCell( 200, 20, 'Address: '.$address, 0);
$pdf->MultiCell( 200, 20, 'Email: '.$email, 0);
$pdf->Output('Details.pdf','D');
?>