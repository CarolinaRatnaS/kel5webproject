<?php include("cek_login.php"); ?>
<?php
	//koneksi
	include("includes/koneksi.php");
	
	$id = $_GET['id'];
	
	$query = "SELECT * FROM supplier WHERE id=$id";
	$hasil = mysqli_query($db, $query);

	//tampil
	$row = mysqli_fetch_assoc($hasil);
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Supplier</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
					<div>
						<a href="tambah_supplier.php">Tambah Data Supplier</a> | <a href="data_supplier.php">Tampil Supplier</a>
					</div>
					<br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Edit Supplier
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" action="proses_edit_supplier.php" method="post">
                                        <div class="form-group">
                                            <label>Kode Supplier</label>
                                            <input class="form-control" type="text" value="<?php echo $row['kode']; ?>" name="kode_supplier" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Supplier</label>
											<input class="form-control" type="text" value="<?php echo $row['nama_supplier']; ?>" name="nama_supplier" />
                                        </div>
										<div class="form-group">
                                            <label>Alamat</label>
											<input class="form-control" type="text" value="<?php echo $row['alamat']; ?>" name="alamat" />
                                        </div>
										<div class="form-group">
                                            <label>No. Telp</label>
											<input class="form-control" type="text" value="<?php echo $row['no_telp']; ?>" name="no_telp" />
                                        </div>
										<input type="hidden" value="<?php echo $row['id']; ?>" name="id"/>
										<button href="proses_edit_pelanggan.php" class="btn btn-primary">Simpan</button>
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