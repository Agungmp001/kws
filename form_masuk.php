<?php
  include "config.php";      
          if(isset($_POST['simpan'])){
          $id_barang    = $_POST['id_barang'];
          $kategori     = $_POST['kategori'];
          $nama_barang  = $_POST['nama_barang'];  
          $jumlah       = $_POST['jumlah'];
          $uom          = $_POST['uom'];
          $tgl          = $_POST['tgl'];
          $location     = $_POST['location'];
          $kd_barang    = $_POST['kd_barang'];
          $input = mysqli_query($con,"INSERT INTO barang_in VALUES('', '$id_barang', '$kd_barang', '$kategori', '$nama_barang', '$jumlah', '$uom', NOW(), '$location')");  
            if($input){
                header("Location: barang_masuk.php");
                exit;
            }else{
                
                echo 'Gagal menambahkan data! ';        
                echo '<a href="form_masuk.php">Kembali</a>'; 
                
            }
        }

        ?>
          <?php 
          include "header.php";

          ?>
          <style type="text/css">
            #input{
              font-size: 14px;
              margin-top: 7px;
            }
            .form{
              margin-top: 20px;
            }
            #submite{
              float: right;
            }
          </style>
                    <script type="text/javascript">
                      var kdbarang=[];
                      var nmbarang=[];
                      var nmkategori=[];
                      var kd_barang=[];
                    </script>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<div class="col-md-12">
        		<h3 class="page-header" style="margin-top: 15px;margin:10px;">Add Incoming<small></small></h3>
        		<div class="col-sm-6">
              <form id="integerForm" class="form" method="POST" action="">
                <div class="form-group row">
                  <label for="smFormGroupInput" class="col-sm-3 col-form-label" id="input">Kode Barang</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="id_barang" onchange="input_nama(this.value)">
                      <option>Kode Barang</option>
                      <?php 
                        $result =mysqli_query($con,"SELECT * FROM stock");   
                        $jsArray = "var dt_barang = new Array();\n";        
                        while ($row = mysqli_fetch_array($result)) {    
                            echo '<option value="' . $row['id_stock'] . '">' . $row['kd_barang'] . '</option>';    
                            //$jsArray .= "dt_barang['" . $row['id_keluar'] . "'] = {nama_barang:'" . addslashes($row['nama_barang']) . "',uom:'".addslashes($row['satuan'])."'};\n";  

                            echo '<script type="text/javascript">
                            
                            kdbarang['.$row['id_stock'].']="'.$row['nama_barang'].'";
                            nmbarang['.$row['id_stock'].']="'.$row['satuan'].'";
                            nmkategori['.$row['id_stock'].']="'.$row['kategori'].'";
                            kd_barang['.$row['id_stock'].']="'.$row['kd_barang'].'";
                          </script>';                      
                        }      
                        
                        ?>   
                    </select>

                    <!--input type="text" name="kategori" class="form-control form-control-sm" placeholder="Kategori"-->
                  </div>
                </div>
                <div hidden="hidden" class="form-group row">
                  <label for="smFormGroupInput" name="kd_barang" class="col-sm-3 col-form-label" id="input">Barang</label>
                  <div class="col-sm-9">
                    <input type="text" name="kd_barang" class="form-control form-control-sm" id="kd_barang" readonly placeholder="Kode Barang">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="smFormGroupInput" name="id_barang" class="col-sm-3 col-form-label" id="input">Kategori</label>
                  <div class="col-sm-9">
                    <input type="text" name="kategori" class="form-control form-control-sm" id="kategori" readonly placeholder="Kode Barang">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-xs-3 col-form-label" id="input">Nama Barang</label>
                  <div class="col-xs-9">
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" readonly placeholder="Nama Barang">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-3 col-form-label" id="input">Jumlah</label>
                  <div class="col-xs-9">
                    <input id="number-only" type="text" name="jumlah" class="form-control" placeholder="Masukan Angka" required>
                    
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-3 col-form-label" id="input">Uom</label>
                  <div class="col-xs-9">
                    <input type="text" name="uom" class="form-control" placeholder="Satuan" readonly id="satuan">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-3 col-form-label" id="input">Location</label>
                  <div class="col-xs-9">
                    <input type="text" name="location" onkeyup="this.value = this.value.toUpperCase()" class="form-control" placeholder="Location" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-3 col-form-label" id="input"></label>
                  <div class="col-xs-9">
                    <button type="submite" name="simpan" class="btn btn-success" id="submite">save</button>
                  </div>
                </div>
              </form>
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
      <script type="text/javascript">    
    <?php //echo $jsArray; ?>  
    function input_nama(id_stock){  
    document.getElementById('nama_barang').value = kdbarang[id_stock];  
    document.getElementById('satuan').value = nmbarang[id_stock]; 
    document.getElementById('kategori').value = nmkategori[id_stock]; 
    document.getElementById('kd_barang').value = kd_barang[id_stock];
    };  
    </script> 
    <script>
      $(function(){
            
        $('#number-only').keyup(function(e) {
              if(this.value!='-')
                while(isNaN(this.value))
                  this.value = this.value.split('').reverse().join('').replace(/[\D]/i,'')
                                         .split('').reverse().join('');
          })
          .on("cut copy paste",function(e){
            e.preventDefault();
          });

      });
    </script>
</html>