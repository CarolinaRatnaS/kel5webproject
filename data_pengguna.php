<?php include("cek_login.php");

	if(!isAdmin()) {
			echo "<script>window.location = history.go(-1);</script>";
		}

	?>
<?php
	//koneksi
	include("includes/koneksi.php");
	
	$query = "SELECT * FROM user";
	$hasil = mysqli_query($db, $query);
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
						<a href="register_akun.php">Tambah Data Pengguna</a> | <a href="data_pengguna.php">Tampil Pengguna</a>
					</div>
					<br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Data Pengguna
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID User</th>
                                            <th>Nama</th>
											<th>Password</th>
											<th>Level</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									    <?php
											$i = 0;
											while($row = mysqli_fetch_assoc($hasil)){
											$i++;
										?>
                                        <tr class="odd gradeX">
											<td><?php echo $i; ?></td>
											<td><?php echo $row['id_user']; ?></td>
											<td><?php echo $row['nama']; ?></td>
											<td><?php echo $row['password']; ?></td>
											<td><?php echo $row['level']; ?></td>
											<td><?php echo $row['alamat']; ?></td>
											<td><?php echo $row['no_telp']; ?></td>
											<td><a href="form_edit_pengguna.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete_pengguna.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                        </tr>
										<?php
											}
										?>
                                    </tbody>
                                </table>
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