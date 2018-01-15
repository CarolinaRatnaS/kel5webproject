<?php include("cek_login.php"); ?>

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
                             Tambah Supplier
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" action="proses_tambah_supplier.php" method="post">
                                        <div class="form-group">
                                            <label>Kode Supplier</label>
                                            <input class="form-control" type="text" name="kode_supplier" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Supplier</label>
											<input class="form-control" type="text" name="nama_supplier" />
                                        </div>
										<div class="form-group">
                                            <label>Alamat</label>
											<input class="form-control" type="text" name="alamat" />
                                        </div>
										<div class="form-group">
                                            <label>No. Telp</label>
											<input class="form-control" type="text" name="no_telp" />
                                        </div>
										<button href="proses_tambah_pelanggan.php" class="btn btn-primary">Simpan</button>
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