<?php include("cek_login.php"); ?>
<?php
	//koneksi
	include("includes/koneksi.php");
	
	$query = "SELECT * FROM kategori";
	$hasil = mysqli_query($db, $query);

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
							<form action="proses_tambah_kategori.php" method="post">
								Kode Kategori : &nbsp; 
								<input type="text" name="kode_kategori"/>
								&nbsp;
								Nama Kategori : &nbsp;
								<input type="text" name="nama_kategori"/>
								&nbsp;
								<input type="hidden" name="id"/>
								<button href="proses_tambah_kategori.php" class="btn btn-primary">Simpan</button>
							</form>
						</div>
						<br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Data Kategori
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Kategori</th>
                                            <th>Nama</th>
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
											<td><?php echo $row['kode']; ?></td>
											<td><?php echo $row['nama_kategori']; ?></td>
											<td><a href="form_edit_kategori.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete_kategori.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                        </tr>
										<?php
											}
										?>
                                        <!-- <tr class="even gradeC">
                                            <td>2</td>
											<td>K00002</td>
											<td>RAM</td>
											<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>3</td>
											<td>K00003</td>
											<td>VGA</td>
											<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                        </tr> -->
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