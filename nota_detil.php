<?php include("cek_login.php"); 

//koneksi
	include("includes/koneksi.php");
	
	$id = $_GET['id'];
	
	
							
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
								<?php
									$q = "SELECT * FROM pembelian WHERE id = $id";
									$h = mysqli_query($db, $q);
									$row1 = mysqli_fetch_assoc($h);
								?>
								<label>Nota Beli</label>
								<h3><?php echo $row1['nota_beli']; ?></h3>
								<br />
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga Beli</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
											$query = "SELECT
														barang.nama,
														pembelian_detil.jumlah,
														pembelian_detil.harga_beli
													  FROM
														pembelian_detil
													  INNER JOIN
														barang
													  ON
														pembelian_detil.barang_id = barang.kode
													  INNER JOIN
														pembelian
													  ON
														pembelian_detil.pembelian_id = pembelian.id
													  WHERE
														pembelian_detil.pembelian_id = $id";
											$hasil = mysqli_query($db, $query);
											$i = 0;
											while($row = mysqli_fetch_assoc($hasil)){
											$i++;
										?>
                                        <tr class="odd gradeX">
											<td><?php echo $i; ?></td>
											<td><?php echo $row['nama']; ?></td>
											<td><?php echo $row['jumlah']; ?></td>
											<td><?php echo $row['harga_beli']; ?></td>
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