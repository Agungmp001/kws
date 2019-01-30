<?php 
include "header.php";
include "config.php";
?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<div class="col-md-12">
        		<h3 class="page-header" style="margin-top: 15px;margin:10px;">Stok Barang<small></small></h3>
        		<div class="col-sm-7">
        		<!--a href="#" data-toggle="tooltip" title="Add"><i class="fa fa-plus-circle fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a-->
        		<a href="lap_stock.php" data-toggle="tooltip" title="Print"><i class="fa fa-print fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>
        		<a href="xlstockbarang.php" data-toggle="tooltip" title="Excel"><i class="fa fa-file-excel-o fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>
        	        <table id="example" class="table table-bordered" width="100%">
                      <thead>
                          <tr style="font-size: 14px;">
                              <th style='text-align: center;padding:6px;width: 40px;'>No</th>
                              <th style='text-align: center;padding:6px;'>Nama Barang</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Kd Barang</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Kategori</th>
                              <th style='text-align: center;padding:6px;width:60px;'>Qty</th>
                              <th style='text-align: center;padding:6px;'>Uom</th>
                              <th style='text-align: center;padding:6px;'>Loc</th>    
                          </tr>
                      </thead>
                      
                      <tbody>

                            <?php
                                    $query = mysqli_query($con,"SELECT * FROM stock ORDER BY id_stock DESC");
                            //$query = mysqli_query($con,"SELECT * from buku order by id_buku asc");                
                                   
                    			$no=1;
								while ($tampil = mysqli_fetch_array($query)) {
								echo "<tr style='font-size: 12px;'>
								<td style='text-align: center;padding: 4px;'>$no</td>";
								echo"
								<td style='padding: 4px;'>$tampil[nama_barang]</td>
                <td style='text-align: center;padding: 4px;'>$tampil[kd_barang]</td>
								<td style='text-align: center;padding: 4px;'>$tampil[kategori]</td>
                <td style='text-align: center;padding: 4px;'>$tampil[stok]</td>
								<td style='text-align: center;padding: 4px;'>$tampil[satuan]</td>
								<td style='text-align: center;padding: 4px;'>$tampil[location]</td
								</tr>";
								$no++;}
							?>
                      </tbody>
                    </table>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>