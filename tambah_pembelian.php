﻿<?php include("cek_login.php"); ?>
<?php 
	//session_start();
	if(isset($_SESSION['count'])) {
		//echo "<pre>";
		//print_r($_SESSION['brg']);
		//echo "</pre>";
	}
	
	if (isset($_SESSION['tmpbarang'])) {
			$tmp_barang=$_SESSION['tmpbarang'];
		}
		if (isset($_SESSION['tmpjumlah'])) {
			$tmp_jumlah=$_SESSION['tmpjumlah'];
		}
		if (isset($_SESSION['tmphargabeli'])) {
			$tmp_hargabeli=$_SESSION['tmphargabeli'];
		}
	
	
	//echo $_SESSION['brg']['0']['harga_beli'];
	
	include("includes/koneksi.php");	
?>
	
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Pembelian</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
					<div>
						<a href="tambah_pembelian.php">Tambah Nota</a> | <a href="tambah_pembelian_barang.php">Tambah Barang Beli</a> | <a href="pembelian.php">Tampil Nota</a> | <a href="tampil_barang_beli.php">Tampil Semua Barang Beli</a>
					</div>
					<br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tambah Pembelian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Pembelian Baru</h3>
                                    <form role="form" action="proses_tambah_pembelian.php" method="post">
                                        <div class="form-group">
                                            <label>Nota Pembelian</label>
                                            <input class="form-control" type="text" name="nota" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
											<input class="form-control" type="text" name="tanggal" id="tanggal" />
                                        </div>
                                        <div class="form-group">
                                            <label>Supplier</label>
											<select class="form-control" name="supplier">
                                                <?php 
													$q3 = "SELECT * FROM supplier";
													$h3 = mysqli_query($db, $q3);
													while($row = mysqli_fetch_assoc($h3)) { ?>
													<option value="<?php echo $row['kode']; ?>"><?php echo $row['nama_supplier']; ?></option>
												<?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3" type="text" name="keterangan"></textarea>
                                        </div>
										<input type="submit" name="simpan_nota" class="btn btn-default" value="Simpan Nota" />
                                    </form>
								</div> <!-- Selesai form kiri -->
                                
                                
                            </div> <!-- Selesai Form kanan kiri -->
							
                        </div>
						</div>
                    <!--End Advanced Tables -->
					</div>
				</div>
                <!-- /. ROW  -->
            
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    
<?php include("includes/layouts/footer.php"); ?>