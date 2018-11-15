<?php include("cek_login.php"); ?>
<?php

	if(!isPengguna()) {
			echo "<script>window.location = history.go(-1);</script>";
		}
	
	//koneksi
	include("includes/koneksi.php");
	
//        menampilkan pesan jika ada pesan
    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
        echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';
    }
 
//        mengatur session pesan menjadi kosong
    $_SESSION['pesan'] = '';
	
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
                     <h2>Edit Profile Saya</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
					<div>
						<div>
							<form role="form" action="proses_edit_profile_user.php" method="post">
                                <div class="form-group">
                                    <label>ID User</label>
                                    <input class="form-control" type="text" name="id_user" value="<?php echo $row['id_user']; ?>" />
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
									<input class="form-control" type="text" name="nama" value="<?php echo $row['nama']; ?>" />
                                </div>
								<div class="form-group">
                                    <label>No. Telp</label>
									<input class="form-control" type="text" name="no_telp" value="<?php echo $row['no_telp']; ?>" />
                                </div>
								<div class="form-group">
                                    <label>Alamat</label>	
								<input class="form-control" type="text" name="alamat" value="<?php echo $row['alamat']; ?>" />
                                </div>
								<input type="hidden" value="<?php echo $row['id']; ?>" name="id"/>
								<a href="ganti_password.php">Ubah Password</a>
								<br /><br />
								<button href="proses_edit_profile_user.php" class="btn btn-primary">Simpan</button>
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