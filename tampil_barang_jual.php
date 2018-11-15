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
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga Jual</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$query = "SELECT
														penjualan.nota_jual,
														barang.nama,
														penjualan_detil.jumlah,
														penjualan_detil.harga_jual,
														penjualan_detil.id
													  FROM
														penjualan_detil
													  INNER JOIN
														barang
													  ON
														penjualan_detil.barang_id = barang.kode
													  INNER JOIN
														penjualan
													  ON
														penjualan_detil.penjualan_id = penjualan.id";
											$hasil = mysqli_query($db, $query);
											$i = 0;
											while($row = mysqli_fetch_assoc($hasil)){
											$i++;
										?>
                                        <tr class="odd gradeX">
											<td><?php echo $i; ?></td>
											<td><?php echo $row['nota_jual']; ?></td>
											<td><?php echo $row['nama']; ?></td>
											<td><?php echo $row['jumlah']; ?></td>
											<td><?php echo $row['harga_jual']; ?></td>
											<td><a href="delete_barang_jual.php?id=<?php echo $row['id']; ?>">Delete</a></td>
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