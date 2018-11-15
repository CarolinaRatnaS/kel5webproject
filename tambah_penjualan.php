<?php include("cek_login.php"); 

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
                                    <h3>Penjualan Baru</h3>
                                    <form role="form" action="proses_tambah_penjualan.php" method="post">
                                        <div class="form-group">
                                            <label>Nota Penjualan</label>
                                            <input class="form-control" type="text" name="nota" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
											<input class="form-control" type="text" name="tanggal" id="tanggal" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pelanggan</label>
											<select class="form-control" name="pelanggan">
                                                <?php 
													$q3 = "SELECT * FROM pelanggan";
													$h3 = mysqli_query($db, $q3);
													while($row = mysqli_fetch_assoc($h3)) { ?>
													<option value="<?php echo $row['kode']; ?>"><?php echo $row['nama_pelanggan']; ?></option>
												<?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3" type="text" name="keterangan"></textarea>
                                        </div>
										<input type="submit" name="simpan_nota" class="btn btn-default" value="Simpan Nota" />
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