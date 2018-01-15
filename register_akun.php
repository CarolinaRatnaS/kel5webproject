<?php include("cek_login.php"); 

	if(!isAdmin()) {
				echo "<script>window.location = history.go(-1);</script>";
	}

?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Pengguna</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
					<div>
						<a href="tambah_pengguna.php">Tambah Data Pengguna</a> | <a href="data_Pengguna.php">Tampil Pengguna</a>
					</div>
					<br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tambah Pengguna
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form action="proses_register.php" method="post">
                                        <div class="form-group" >
                                            <label>ID User</label>
                                            <input class="form-control" type="text" name="id_user" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
											<input class="form-control" type="text" name="nama" />
                                        </div>
										<div class="form-group">
                                            <label>No. Telp</label>
											<input class="form-control" type="text" name="no_telp" />
                                        </div>
										<div class="form-group">
                                            <label>Alamat</label>
											<input class="form-control" type="text" name="alamat" />
                                        </div>
										<div class="form-group">
                                            <label>Password</label>
											<input class="form-control" type="password" name="password" />
                                        </div>
										<div class="form-group">
											<label>Level Pengguna</label>
											<select class="form-control" name="level">
												<option value="admin">Admin</option>
												<option value="pegawai">Pegawai</option>
                                            </select>
										</div>
										<button href="proses_register.php" class="btn btn-primary">Simpan</button>
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