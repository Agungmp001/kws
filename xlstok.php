<table id="example" class="table table-bordered" width="100%">
                      <thead>
                          <tr style="font-size: 14px;">
                              <th style='text-align: center;padding:6px;width: 40px;'>No</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Nama Barang</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Kd Barang</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Kategori</th>
                              <th style='text-align: center;padding:6px;width:60px;'>Qty</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Uom</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Loc</th>    
                          </tr>
                      </thead>
                      
                      <tbody>

                            <?php
                            include "config.php";
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