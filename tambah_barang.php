<?php include("cek_login.php"); ?>
<?php

	include("includes/koneksi.php");
?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Barang</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
					<div>
						<a href="tambah_barang.php">Tambah Data Barang</a> | <a href="data_barang.php">Tampil Barang</a>
					</div>
					<br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tambah Barang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
									
                                    <form role="form" action="proses_tambah_barang.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kode Barang</label>
                                            <input class="form-control" type="text" name="kode_barang" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Barang</label>
											<input class="form-control" type="text" name="nama_barang" />
                                        </div>
										<div class="form-group">
                                            <label>Gambar Barang</label>
											<input type="file" name="gambar" />
                                        </div>
										<div class="form-group">
                                            <label>Stok</label>
											<input class="form-control" type="text" name="stok" />
                                        </div>
										<div class="form-group">
                                            <label>Satuan</label>
											<input class="form-control" type="text" name="satuan" />
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
											<select class="form-control" name="kategori">
                                                <?php 
													$q2 = "SELECT * FROM kategori";
													$h2 = mysqli_query($db, $q2);
													while($row = mysqli_fetch_assoc($h2)) { ?>
													<option value="<?php echo $row['kode']; ?>"><?php echo $row['nama_kategori']; ?></option>
												<?php } ?>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Supplier</label>
											<select class="form-control" name="supplier">
                                                <?php
													$q3 = "SELECT * FROM supplier";
													$h3 = mysqli_query($db, $q3);
													while($row = mysqli_fetch_assoc($h3)) { ?>
													<option value="<?php echo $row['kode']; ?>"><?php echo $row['nama_supplier']; ?></option>
												<?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Beli(Rp)</label>
											<input class="form-control" type="text" name="harga_beli" />
                                        </div>
										<div class="form-group">
                                            <label>Harga Jual(Rp)</label>
											<input class="form-control" type="text" name="harga_jual" />
                                        </div>
										<button href="proses_tambah_barang.php" class="btn btn-primary">Simpan</button>
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