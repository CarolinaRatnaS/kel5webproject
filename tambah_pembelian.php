<?php include("cek_login.php"); ?>
<?php 
	//session_start();
	if(isset($_SESSION['count'])) {
		//echo "<pre>";
		//print_r($_SESSION['brg']);
		//echo "</pre>";
	}
	
	if (isset($_SESSION['tmpbarang'])) {
			$tmp_barang=$_SESSION['tmpbarang'];
		}
		if (isset($_SESSION['tmpjumlah'])) {
			$tmp_jumlah=$_SESSION['tmpjumlah'];
		}
		if (isset($_SESSION['tmphargabeli'])) {
			$tmp_hargabeli=$_SESSION['tmphargabeli'];
		}
	
	
	//echo $_SESSION['brg']['0']['harga_beli'];
	
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
						<a href="tambah_pembelian.php">Tambah Data Pembelian</a> | <a href="pembelian.php">Tampil Pembelian</a>
					</div>
					<br />
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tambah Pembelian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Pembelian Baru</h3>
                                    <form role="form" action="proses_tambah_beli_barang.php" method="post">
                                        <div class="form-group">
                                            <label>Nota Pembelian</label>
                                            <input class="form-control" type="text" name="nota" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
											<input class="form-control" type="text" name="tanggal" id="tanggal" />
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
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3" type="text" name="keterangan"></textarea>
                                        </div>
										<input type="hidden" name="pembelian_id" />
                                    </form>
								</div> <!-- Selesai form kiri -->
                                
                                <div class="col-md-6">
                                    <h3>Tambah Barang</h3>
                                    <form role="form" action="proses_tambah_beli_barang.php" method="post">
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
                                            <label>Harga Beli(Rp)</label>
                                            <input class="form-control" type="text" name="harga_beli" />
                                        </div>
										<input type="submit" class="btn btn-default" name="tambah_barang" value="Tambah Barang" />
                                    </form>
                                </div> <!-- Selesai form kanan -->
                            </div> <!-- Selesai Form kanan kiri -->
							<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Beli(Rp)</th>
                                            <th>Jumlah</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <?php
											
											
											for ($i=0;$i<count($tmp_barang);$i++){
												$q = "SELECT nama FROM barang WHERE kode = '$tmp_barang[$i]'";
												$h = mysqli_query($db, $q);
												while ($row = mysqli_fetch_array($h)) {
												print "<tr><td>".$i."</td><td>".$tmp_barang[$i]."</td><td>".$row[0]."</td><td>".$tmp_jumlah[$i]."</td><td>".$tmp_hargabeli[$i]."</td><td><a href='tambah_pembelian.php?index=$i'>Hapus</a></td></tr>"; } }
											?>
                                        </tr>
                                    </tbody>
                                </table>
								<form role="form" action="proses_tambah_beli_barang.php" method="post">
									<input type="submit" name="simpan_transaksi" class="btn btn-default" value="Simpan Transaksi" />
								</form>
								
								
								<?php
								
									$index = $_GET['index'];
									$tmp_barang[$index] = null;
									$tmp_jumlah[$index] = null;
									$tmp_hargabeli[$index] = null;
									
									$_SESSION['tmpbarang'] = $tmp_barang;
									$_SESSION['tmpjumlah'] = $tmp_jumlah;
									$_SESSION['tmphargabeli'] = $tmp_hargabeli;
									
									//echo "<pre>";
									//print_r($_SESSION);
								?>

                                <pre>
                                    <?php
                                    echo $_SESSION['tmpbarang'][0];
                                    //$_SESSION['tmpbarang'][0]=null;
                                    echo $_SESSION['tmpbarang'][0];
                                    print_r($_SESSION);
                                    ?>
                                </pre>

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