<?php include("cek_login.php"); ?>
<?php
	//koneksi
	include("includes/koneksi.php");
	
	$id = $_SESSION['user']['id_user'];
	
	$query = "SELECT * FROM user WHERE id_user = '$id'";
	$hasil = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($hasil);

?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Kategori</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
					<div>
						<div>
							<form role="form" action="proses_edit_password.php" method="post">
                                <div class="form-group">
                                    <label>Password saat ini</label>
                                    <input class="form-control" type="password" name="pwold" />
                                </div>
                                <div class="form-group">
                                    <label>Password Baru</label>
									<input class="form-control" type="text" name="pwnew" />
                                </div>
								<input type="hidden" value="<?php echo $row['id']; ?>" name="id"/>
								<a href="ganti_password.php">Ubah Password</a>
								<br /><br />
								<button href="proses_edit_profile_admin.php" class="btn btn-primary">Simpan</button>
                            </form>
						</div>
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