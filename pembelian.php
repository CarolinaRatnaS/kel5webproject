<?php include("cek_login.php"); ?>

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
                             Tampil Pembelian
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Pembelian</th>
                                            <th>Tanggal</th>
                                            <th>Supplier</th>
                                            <th>Keterangan</th>
											<th>Nama Barang</th>
											<th>Kategori</th>
											<th>Harga Beli(Rp)</th>
											<th>Jumlah</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
											<td>BL00001</td>
											<td>05-12-2017</td>
											<td>Kingston</td>
											<td>Tambah stok</td>
											<td>Kingston 8GB USB2.0</td>
											<td>Flashdisk</td>
											<td>30000</td>
											<td>3</td>
											<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>2</td>
											<td>BL00001</td>
											<td>05-12-2017</td>
											<td>Kingston</td>
											<td>Tambah stok</td>
											<td>Kingston 2GB USB2.0</td>
											<td>Flashdisk</td>
											<td>20000</td>
											<td>1</td>
											<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>3</td>
											<td>BL00002</td>
											<td>06-12-2017</td>
											<td>SUN</td>
											<td>Tambah stok</td>
											<td>SUN 2GB PC 6400DDR2</td>
											<td>RAM</td>
											<td>190000</td>
											<td>8</td>
											<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
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