<?php include("cek_login.php"); 

//koneksi
	include("includes/koneksi.php");
							
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
                             Tampil Pembelian
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nota Pembelian</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga Beli</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$query = "SELECT
														pembelian.nota_beli,
														barang.nama,
														pembelian_detil.jumlah,
														pembelian_detil.harga_beli,
														pembelian_detil.id
													  FROM
														pembelian_detil
													  INNER JOIN
														barang
													  ON
														pembelian_detil.barang_id = barang.kode
													  INNER JOIN
														pembelian
													  ON
														pembelian_detil.pembelian_id = pembelian.id";
											$hasil = mysqli_query($db, $query);
											$i = 0;
											while($row = mysqli_fetch_assoc($hasil)){
											$i++;
										?>
                                        <tr class="odd gradeX">
											<td><?php echo $i; ?></td>
											<td><?php echo $row['nota_beli']; ?></td>
											<td><?php echo $row['nama']; ?></td>
											<td><?php echo $row['jumlah']; ?></td>
											<td><?php echo $row['harga_beli']; ?></td>
											<td><a href="delete_barang_beli.php?id=<?php echo $row['id']; ?>">Delete</a></td>
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