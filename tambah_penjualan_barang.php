<?php include("cek_login.php"); ?>
<?php 
	
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
                             Tambah Penjualan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Tambah Barang</h3>
                                    <form role="form" action="proses_tambah_jual_barang.php" method="post">
										<div class="form-group">
                                            <label>Nota</label>
                                            <select class="form-control" name="nota">
                                                <?php 
													$q2 = "SELECT * FROM penjualan";
													$h2 = mysqli_query($db, $q2);
													while($row = mysqli_fetch_assoc($h2)) { ?>
													<option value="<?php echo $row['id']; ?>"><?php echo $row['nota_jual']; ?></option>
												<?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <select class="form-control" name="barang">
                                                <?php 
													$q2 = "SELECT * FROM barang";
													$h2 = mysqli_query($db, $q2);
													while($row = mysqli_fetch_assoc($h2)) { ?>
													<option value="<?php echo $row['kode']; ?>"><?php echo $row['nama']; ?></option>
												<?php } ?>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="text" name="jumlah" />
                                        </div>
										<div class="form-group">
                                            <label>Harga Jual(Rp)</label>
                                            <input class="form-control" type="text" name="harga_jual" />
                                        </div>
										<input type="submit" class="btn btn-default" name="tambah_barang" value="Tambah Barang" />
										<input type="submit" class="btn btn-default" name="simpan_penjualan" value="Simpan Penjualan" />
										
                                    </form>
                                </div> <!-- Selesai form kanan -->
                            </div> <!-- Selesai Form kanan kiri -->
							<div class="table-responsive">
							<br />
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
											<th>Nota</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
											<th>Jumlah</th>
                                            <th>Harga Jual(Rp)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
											<?php
												$q3 = "SELECT
														penjualan.nota_jual,
														barang.kode,
														barang.nama,
														penjualan_detil.jumlah,
														penjualan_detil.harga_jual
													  FROM
														penjualan_detil
													  INNER JOIN
														penjualan
													  ON
														penjualan_detil.penjualan_id = penjualan.id
													  INNER JOIN
														barang
													  ON
														penjualan_detil.barang_id = barang.kode";
												$h3 = mysqli_query($db, $q3);
											
												$i = 0;
												while($row = mysqli_fetch_assoc($h3)){
												$i++;
											?>
											<tr class="odd gradeX">
												<td><?php echo $i; ?></td>
												<td><?php echo $row['nota_jual']; ?></td>
												<td><?php echo $row['kode']; ?></td>
												<td><?php echo $row['nama']; ?></td>
												<td><?php echo $row['jumlah']; ?></td>
												<td><?php echo $row['harga_jual']; ?></td> 
											</tr>
											<?php
												}
											?>
                                            
                                        </tr>
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