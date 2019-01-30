<?php 
include "header.php";
include "config.php";
?>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<div class="col-md-12">
        		<h3 class="page-header" style="margin-top: 15px;margin:10px;">Incoming<small></small></h3>
        		<div class="col-sm-8">
            <?php
              $query ="SELECT * FROM barang_in  WHERE tgl BETWEEN '$_POST[dari]' AND '$_POST[sampai]'";
            ?>
            <div>
          		<a href="form_keluar.php" data-toggle="tooltip" title="Add"><i class="fa fa-plus-circle fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>
          		<a href="lap_cari_masuk.php?id=<?php echo base64_encode($query); ?>" data-toggle="tooltip" title="Print"><i class="fa fa-print fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>
          		<a href="xl_masuk.php?id=<?php echo base64_encode($query); ?>" data-toggle="tooltip" title="Excel"><i class="fa fa-file-excel-o fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>

              </div>
                <!--form class="form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-sm" id="dari" placeholder="Dari tgl" style="height: 25px;font-size:12px">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="dar" placeholder="Sampai tgl" style="height: 25px;font-size:12px;">
                  </div>
                  <button type="submit" name="simpan" class="btn btn-primary" style="height: 25px;font-size: 10px;padding: 3px 10px;">Cari</button>
                </form-->

              <div>
                <?php
                $dari     = $_POST['dari'];
                $sampai  = $_POST['sampai'];
                   $query = mysqli_query($con,"SELECT * FROM barang_in  WHERE tgl BETWEEN '$_POST[dari]' AND '$_POST[sampai]'");
                  $hitung = mysqli_num_rows($query);
                  if ($hitung == 0){

                      echo"<div class='alert alert-warning' role='alert'>
                            <strong>Warning!</strong> Data tidak ditemukan.<a href='barang_masuk.php'>Kembali ke Stock</a>
                          </div>";
                  } 
                  else{

                  ?>
                  <h6>Periode: <?php echo "$dari"; ?> s/d <?php echo "$sampai"; ?></h6>
          	        <table id="example" class="table table-bordered" width="100%">
                        <thead>
                            <tr style="font-size: 14px;">
                                <th style='text-align: center;padding:6px;width: 40px;'>No</th>
                                <th style='text-align: center;padding:6px;'>Nama Barang</th>
                                <th style='text-align: center;padding:6px;width: 100px;'>Kd Barang</th>
                                <th style='text-align: center;padding:6px;width: 100px;'>Size</th>
                                <th style='text-align: center;padding:6px;width:60px;'>Qty</th>
                                <th style='text-align: center;padding:6px;width:60px;'>Uom</th>
                                <th style='text-align: center;padding:6px;width: 140px;'>Tgl Masuk</th>
                                <th style='text-align: center;padding:6px;width:60px;'>Loc</th> 
                               
                            </tr>
                        </thead>
                        
                        <tbody>

                  <?php
                  $no=1;
  								while ($tampil = mysqli_fetch_array($query)) {
  								echo "<tr style='font-size: 12px;'>
  								<td style='text-align: center;padding: 4px;'>$no</td>";
  								echo"
  							  <td style='padding: 4px;'>$tampil[kategori]</td>
                  <td style='text-align: center;padding: 4px;'>$tampil[kode_barang]</td>
                  <td style='text-align: center;padding: 4px;'>$tampil[nama_barang]</td>
                  
                  <td style='text-align: center;padding: 4px;'>$tampil[jumlah]</td>
                  <td style='text-align: center;padding: 4px;'>$tampil[satuan]</td>
                  <td style='text-align: center;padding: 4px;'>$tampil[tgl]</td>
                  <td style='text-align: center;padding: 4px;'>$tampil[location]</td>
  								</tr>";
  								$no++;}
                  echo"
                 
                        </tbody>
                      </table>";
                       }
                ?>
              </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>