<?php include("cek_login.php"); ?>
<?php

	//koneksi
	include("includes/koneksi.php");
	
	$id = $_GET['id'];
	
	$query = "SELECT * FROM pembelian WHERE id=$id";
	$hasil = mysqli_query($db, $query);

	//tampil
	$row = mysqli_fetch_assoc($hasil);
	
	$tanggal = $row['tanggal'];
	
	function ubahTanggal($tanggal){
		 $pisah = explode('-',$tanggal);
		 $array = array($pisah[1],$pisah[2],$pisah[0]);
		 $satukan = implode('/',$array);
		 return $satukan;
		}
		
		$tanggal_ubah = ubahTanggal($tanggal);
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
                             Edit Nota Beli
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="proses_edit_nota.php" method="post">
                                        <div class="form-group">
                                            <label>Nota Pembelian</label>
                                            <input class="form-control" type="text" name="nota" value="<?php echo $row['nota_beli']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
											<input class="form-control" type="text" name="tanggal" id="tanggal" value="<?php echo $tanggal_ubah; ?>" />
                                        </div>
										<div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3" type="text" name="keterangan"><?php echo $row['keterangan']; ?></textarea>
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
										<input type="hidden" value="<?php echo $row['id']; ?>" name="id"/>
										<button href="proses_edit_nota.php" class="btn btn-primary">Simpan</button>
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