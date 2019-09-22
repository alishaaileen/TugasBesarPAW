<?php

include('../db.php');

// Koneksi library FPDF
require('../fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',24);
// Membuat string
$pdf->Cell(280,7,'Daftar Pegawai',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(10,10,'No.',1,0);
$pdf->Cell(40,10,'Nama',1,0);
$pdf->Cell(40,10,'E-mail',1,0);
$pdf->Cell(35,10,'Jenis Kelamin',1,0);
$pdf->Cell(30,10,'No.HP',1,0);
$pdf->Cell(30,10,'Pendidikan',1,0);
$pdf->Cell(10,10,'IPK',1,0);
$pdf->Cell(25,10,'Cumlaude',1,0);
$pdf->Cell(30,10,'Alamat Kerja',1,0);
$pdf->Cell(30,10,'Kota Kerja',1,1);
 
$pdf->SetFont('Arial','',12);
$query = mysqli_query($con, "SELECT * FROM pegawai");

$nomor = 1;
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,10,$nomor,1,0);
    $pdf->Cell(40,10,$row['nama'],1,0);
    $pdf->Cell(40,10,$row['email'],1,0);
    if($row['gender'] == 0) {
        $pdf->Cell(35,10,'Laki-laki',1,0);
    }else {
        $pdf->Cell(35,10,'Perempuan',1,0);
    }
    $pdf->Cell(30,10,$row['nomorHandphone'],1,0);
    $pdf->Cell(30,10,$row['pendidikan'],1,0);
    $pdf->Cell(10,10,$row['ipk'],1,0);
    if($row['cumlaude'] == 0) {
        $pdf->Cell(25,10,'Ya',1,0);
    }else {
        $pdf->Cell(25,10,'Tidak',1,0);
    }
    $pdf->Cell(30,10,$row['alamtKerja'],1,0);
    $pdf->Cell(30,10,$row['kotaKerja'],1,1);

    $nomor++;
}

$pdf->Output();

?>