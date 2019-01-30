<?php
include 'config.php';
require('fpdf/fpdf.php');

$pdf = new FPDF("P","cm","A4");

$pdf->SetMargins(1,1,0.1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',14);
//$pdf->Image('../../assets/img/lo.png',1.6,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'PT. Gajah Mulia Sejahtera',0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : (021) 8983 4339, 8983 4340  Fax. (021) 88983 4340',0,'L');    
$pdf->SetFont('Arial','B',9);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. Industri Jababeka No.65 Pasir Gombong, Cikarang Utara, Bekasi',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.gms.com   email : bis_gms@yahoo.com',0,'L');
$pdf->Line(1,3.1,19.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,19.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(18.5,0.7,"Barang Masuk",0,10,'C');
$pdf->ln(0.2);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','i',10);
$pdf->Cell(1, 0.7, 'No', 1, 0, 'C');
$pdf->Cell(4.5, 0.7, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(1.5, 0.7, 'Kode', 1, 0, 'C');
$pdf->Cell(2.5, 0.7, 'kategori', 1, 0, 'C');
$pdf->Cell(2, 0.7, 'Qty', 1, 0, 'C');
$pdf->Cell(1.5, 0.7, 'Uom', 1, 0, 'C');
$pdf->Cell(4, 0.7, 'Tgl Masuk', 1, 0, 'C');
$pdf->Cell(1.7, 0.7, 'Location', 1, 0, 'C');
//$pdf->Cell(1.7, 0.7, 'No kursi', 1, 0, 'C');
//$pdf->Cell(3, 0.7, 'Kd Bus', 1, 0, 'C');
$pdf->ln(0.7);
$pdf->SetFont('Arial','i',10);
$query = mysqli_query($con,"SELECT * FROM barang_in ORDER BY id_masuk DESC");
$no=1;
while ($lihat = mysqli_fetch_array($query)) { 
	$pdf->Cell(1, 0.7, $no , 1, 0, 'C');
	$pdf->Cell(4.5, 0.7, $lihat['nama_barang'],1, 0, 'L');
	$pdf->Cell(1.5, 0.7, $lihat['kode_barang'],1, 0, 'C');
	$pdf->Cell(2.5, 0.7, $lihat['kategori'], 1, 0,'C');
	$pdf->Cell(2, 0.7, $lihat['jumlah'],1, 0, 'C');
	$pdf->Cell(1.5, 0.7, $lihat['satuan'], 1, 0,'C');
	$pdf->Cell(4, 0.7, $lihat['tgl'],1, 0, 'C');
	$pdf->Cell(1.7, 0.7, $lihat['location'],1, 1, 'C');
	//$pdf->Cell(1.7, 0.7, $lihat['no_seat'], 1, 0,'C');
	//$pdf->Cell(3, 0.7, $lihat['kd_bus'], 1, 1,'C');
	$no++;
}

$pdf->Output("laporan_customer.pdf","I");

?>

