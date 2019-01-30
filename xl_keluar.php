<?php

    $filename ="BarangKeluar.xls";
    header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename='.$filename);
    
//include 'xlkeluar.php';
?>
	<h3 class="page-header" style="margin-top: 15px;margin:10px;">Outbound<small></small></h3>
	<table id="example" class="table table-bordered" width="100%">
      <thead>
          <tr style="font-size: 14px;">
              <th style='text-align: center;padding:6px;'>No</th>
              <th style='text-align: center;padding:6px;'>Nama Barang</th>
              <th style='text-align: center;padding:6px;'>Kd Barang</th>
              <th style='text-align: center;padding:6px;'>Kategori</th>
              <th style='text-align: center;padding:6px;'>Qty</th>
              <th style='text-align: center;padding:6px;'>Uom</th>
              <th style='text-align: center;padding:6px;'>Tgl Masuk</th> 
              <th style='text-align: center;padding:6px;'>Loc</th>
          </tr>
      </thead>
      
      <tbody>

        <?php
        include "config.php";
        $sql_txt=base64_decode($_GET['id']);
		//die($sql_txt);
		$no=1;
		$sql=mysqli_query($con,$sql_txt);
		while ($tampil = mysqli_fetch_array($sql)) {
			echo "<tr style='font-size: 12px;'>
			<td style='text-align: center;padding: 4px;'>$no</td>";
			echo"
			  	<td style='padding: 4px;'>$tampil[nama_barang]</td>
		        <td style='text-align: center;padding: 4px;'>$tampil[kode_barang]</td>
		        <td style='text-align: center;padding: 4px;'>$tampil[kategori]</td>
		        
		        <td style='text-align: center;padding: 4px;'>$tampil[jumlah]</td>
		        <td style='text-align: center;padding: 4px;'>$tampil[satuan]</td>
		        <td style='text-align: center;padding: 4px;'>$tampil[tgl]</td>
		        <td style='text-align: center;padding: 4px;'>$tampil[location]</td>
				</tr>";
				$no++;}
			?>
      </tbody>
    </table>
