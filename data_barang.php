<?php include("cek_login.php"); ?>
<?php
	//koneksi
	include("includes/koneksi.php");
	
	$query = "SELECT
				barang.id, barang.kode, barang.nama, barang.gambar, barang.stok, barang.satuan, supplier.nama_supplier, barang.harga_beli, barang.harga_jual, kategori.nama_kategori
			  FROM barang
			  INNER JOIN kategori
			  ON barang.kategori_id = kategori.kode
			  INNER JOIN supplier
			  ON barang.supplier_id = supplier.kode";
	$hasil = mysqli_query($db, $query);
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
						<!--<div>
							<form action="" method="post">
								Kategori:
								<select name="kategori">
									<?php 
										//$q2 = "SELECT * FROM kategori";
										//$h2 = mysqli_query($db, $q2);
										//while($row = mysqli_fetch_assoc($h2)) { ?>
										<option value="<?php //echo $row['id']; ?>"><?php //echo $row['nama_kategori']; ?></option>
									<?php //} ?>
								</select>
								&nbsp;
								Kata Kunci:
								<input type="text" name="filter"/>
								&nbsp;
								<button href="#">Cari</button>
							</form>
							<br />
						</div>-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Data Barang
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Gambar</th>
                                            <th>Stok</th>
											<th>Satuan</th>
											<th>Kategori</th>
											<th>Supplier</th>
											<th>Harga Modal(Rp)</th>
											<th>Harga Jual(Rp)</th>
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
											<td><?php echo $row['nama']; ?></td>
											<td><img src="<?php echo $row ['gambar']; ?>" width="50"></td>
											<td><?php echo $row['stok']; ?></td>
											<td><?php echo $row['satuan']; ?></td>
											<td><?php echo $row['nama_kategori']; ?></td>
											<td><?php echo $row['nama_supplier']; ?></td>
											<td><?php echo $row['harga_beli']; ?></td>
											<td><?php echo $row['harga_jual']; ?></td>
											<td><a href="form_edit_barang.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete_barang.php?id=<?php echo $row['id']; ?>">Delete</a></td>
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