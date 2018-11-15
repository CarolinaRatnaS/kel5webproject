<?php include("cek_login.php");

//koneksi
	include("includes/koneksi.php");

?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Penjualan</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
					<div>
						<a href="tambah_penjualan.php">Tambah Nota</a> | <a href="tambah_penjualan_barang.php">Tambah Barang Jual</a> | <a href="penjualan.php">Tampil Nota</a> | <a href="tampil_barang_jual.php">Tampil Semua Barang Jual</a>
					</div>
					<br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tampil Penjualan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nota Penjualan</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Pelanggan</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$query = "SELECT 
														penjualan.id,
														penjualan.nota_jual,
														penjualan.tanggal,
														penjualan.keterangan,
														pelanggan.nama_pelanggan
													  FROM
														penjualan
													  INNER JOIN
														pelanggan
													  ON
														penjualan.pelanggan_id = pelanggan.kode";
											$hasil = mysqli_query($db, $query);
											$i = 0;
											while($row = mysqli_fetch_assoc($hasil)){
											$i++;
										?>
                                        <tr class="odd gradeX">
											<td><?php echo $i; ?></td>
											<td><a href="nota_detiljual.php?id=<?php echo $row['id']; ?>"><?php echo $row['nota_jual']; ?></a></td>
											<td><?php echo $row['tanggal']; ?></td>
											<td><?php echo $row['keterangan']; ?></td>
											<td><?php echo $row['nama_pelanggan']; ?></td>
											<td><a href="form_edit_notajual.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete_penjualan.php?id=<?php echo $row['id']; ?>">Delete</a></td>
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