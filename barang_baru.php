<?php
  include "config.php";      
          if(isset($_POST['simpan'])){
          $dataMax = mysqli_fetch_assoc(mysqli_query($con,"SELECT MAX(`id_barang`) AS ID FROM stock"));
          //$id_barang    = $_POST['id_barang'];
          $kategori     = $_POST['kategori'];
          $nama_barang  = $_POST['nama_barang'];  
          $stock       = $_POST['stock'];
          $satuan          = $_POST['satuan'];
         
          $location     = $_POST['location'];
          $kd_barang    = $_POST['kd_barang'];
          $id_barang    =$dataMax['ID']+1;
          $input = mysqli_query($con,"INSERT INTO stock VALUES('', '$id_barang', '$kd_barang', '$nama_barang', '$kategori', '$stock', '$satuan', '$location')");  
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
          <?php            
            function id_barang($param='GMS-') {
              global $con;
              $dataMax = mysqli_fetch_assoc(mysqli_query($con,"SELECT SUBSTR(MAX(`id_barang`),-5) AS ID FROM stock")); 

              if($dataMax['ID']=='') { 
                $ID = $param."00001";
                  }else {
                    $MaksID = $dataMax['ID'];
                    $MaksID++;
                    if($MaksID < 10) $ID = $param."0000".$MaksID; 
                    else if($MaksID < 100) $ID = $param."000".$MaksID; 
                    else if($MaksID < 1000) $ID = $param."00".$MaksID;
                    else if($MaksID < 10000) $ID = $param."0".$MaksID; 
                    else $ID = $MaksID;
                       }

                    return $ID;
                    }
            ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<div class="col-md-12">
        		<h3 class="page-header" style="margin-top: 15px;margin:10px;">Add Incoming<small></small></h3>
        		<div class="col-sm-6">
              <form id="integerForm" class="form" method="POST" action="">
                <!--div class="form-group row">
                  <label for="smFormGroupInput" name="kd_barang" class="col-sm-3 col-form-label" id="input">Id Barang</label>
                  <div class="col-sm-9">
                    <input type="text" name="id_barang"  class="form-control form-control-sm" id="kd_barang" placeholder="ID Barang">
                  </div>
                </div-->

                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-3 col-form-label" id="input">Kode Barang</label>
                  <div class="col-xs-9">
                    <input type="text" name="kd_barang" class="form-control" required  placeholder="Kode Barang" id="satuan">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="smFormGroupInput" name="id_barang" class="col-sm-3 col-form-label" id="input">Kategori</label>
                  <div class="col-sm-9">
                    <!--input type="text" name="kategori" class="form-control form-control-sm" id="kategori" placeholder="Kategori Barang"-->
                    <select  name="kategori" class="form-control form-control-sm" required  >
                      <option>--Pilih Kategori--</option>
                      <option value="Karton">Karton</option>
                      <option value="Reports">Reports</option>
                      <option value="Partisi">Partisi</option>
                      <option value="Doubel Tape">Doubel Tape</option>
                      <option value="Lem">Lem</option>
                      <option value="Plastik">Plastik</option>
                      <option value="ATK">ATK</option>
                      <option value="And All">And All</option>
                    </select>        
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-xs-3 col-form-label" id="input">Nama Barang</label>
                  <div class="col-xs-9">
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang" required  placeholder="Nama Barang">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-3 col-form-label" id="input">Jumlah</label>
                  <div class="col-xs-9">
                    <input id="number-only" type="text" name="stock" class="form-control"  placeholder="Masukan Angka" required>
                    
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-url-input" class="col-xs-3 col-form-label" id="input">Uom</label>
                  <div class="col-xs-9">
                    <!--input type="text" name="satuan" class="form-control" placeholder="Satuan" id="satuan"-->
                    <select  name="satuan" class="form-control form-control-sm"  >
                      <option>--Pilih Satuan--</option>
                      <option value="Pcs">Pcs</option>
                      <option value="Kg">Kg</option>
                      <option value="Liter">Liter</option>
                      <option value="Meter">Meter</option>
                      <option value="Roll">Roll</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-xs-3 col-form-label" id="input">Location</label>
                  <div class="col-xs-9">
                    <input type="text" name="location" onkeyup="this.value = this.value.toUpperCase()" required  class="form-control" placeholder="Location" required>
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