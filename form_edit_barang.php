<?php include("cek_login.php"); ?>
<?php

	include("includes/koneksi.php");
	
	$id = $_GET['id'];
	
	$query = "SELECT
				barang.kode, barang.nama, barang.gambar, barang.stok, barang.satuan, barang.harga_beli, barang.harga_jual, supplier.nama_supplier, kategori.nama_kategori
			  FROM
				barang
			  INNER JOIN
				kategori
			  ON
				barang.kategori_id = kategori.kode
			  INNER JOIN
				supplier
			  ON
				barang.supplier_id = supplier.kode
			  WHERE
				barang.id = $id";
	$hasil = mysqli_query($db, $query);

	//tampil
	$row = mysqli_fetch_assoc($hasil);
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
                             Edit Barang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
									
                                    <form role="form" action="proses_edit_barang.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kode Barang</label>
                                            <input class="form-control" type="text" value="<?php echo $row['kode']; ?>" name="kode_barang" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Barang</label>
											<input class="form-control" type="text" value="<?php echo $row['nama']; ?>" name="nama_barang" />
                                        </div>
										<div class="form-group">
                                            <label>Gambar Barang</label>
											<br />
											<img src="<?php echo $row ['gambar']; ?>" width="50">
											<input type="file" name="gambar" value="<?php echo $row['gambar']; ?>" />
                                        </div>
										<div class="form-group">
                                            <label>Stok</label>
											<input class="form-control" type="text" value="<?php echo $row['stok']; ?>" name="stok" />
                                        </div>
										<div class="form-group">
                                            <label>Satuan</label>
											<input class="form-control" type="text" value="<?php echo $row['satuan']; ?>" name="satuan" />
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Beli(Rp)</label>
											<input class="form-control" type="text" value="<?php echo $row['harga_beli']; ?>" name="harga_beli" />
                                        </div>
										<div class="form-group">
                                            <label>Harga Jual(Rp)</label>
											<input class="form-control" type="text" value="<?php echo $row['harga_jual']; ?>" name="harga_jual" />
                                        </div>
										<div class="form-group">
                                            <label>Kategori</label>
											<select class="form-control" name="kategori">
                                                <?php 
													$q2 = "SELECT * FROM kategori";
													$h2 = mysqli_query($db, $q2);
													while($row = mysqli_fetch_assoc($h2)) { ?>
													<option value="<?php echo $row['kode']; ?>" checked="checked"><?php echo $row['nama_kategori']; ?></option>
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
										<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
										<button href="proses_edit_barang.php" class="btn btn-primary">Simpan</button>
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