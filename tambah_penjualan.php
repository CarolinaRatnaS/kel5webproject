<?php include("cek_login.php"); ?>

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
						<a href="tambah_penjualan.php">Tambah Data Penjualan</a> | <a href="penjualan.php">Tampil Penjualan</a>
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
                                    <form role="form">
                                        <div class="form-group">
                                            <label>No. Penjualan</label>
                                            <input class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
											<fieldset disabled="disabled">
                                            <p><?php $tanggal = Date("d-m-Y", time()+60*60*7); echo "$tanggal"; ?></p>
											</fieldset>
                                        </div>
                                        <div class="form-group">
                                            <label>Pelanggan</label>
											<select class="form-control">
                                                <option>Pelanggan1</option>
                                                <option>Pelanggan2</option>
												<option>Pelanggan3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </form>
								</div> <!-- Selesai form kiri -->
                                
                                <div class="col-md-6">
                                    <h3>Tambah Barang</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <select class="form-control">
                                                <option>Kingston 8GB USB2.0</option>
                                                <option>SUN 2GB PC 6400 DDR2</option>
                                                <option>V-GEN 2GB PC 6400 V-GEN DDR2</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" />
                                        </div>
										<div class="form-group">
                                            <label>Harga Jual(Rp)</label>
                                            <input class="form-control" />
                                        </div>
										<button type="submit" class="btn btn-default">Tambah Barang</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
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
                                            <th>Harga Jual(Rp)</th>
                                            <th>Jumlah</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td><a href="#">Hapus</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td><a href="#">Hapus</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td><a href="#">Hapus</a></td>
                                        </tr>
                                    </tbody>
                                </table>
								<button type="submit" class="btn btn-default">Simpan Transaksi</button>
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