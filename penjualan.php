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
                             Tampil Penjualan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Penjualan</th>
                                            <th>Tanggal</th>
                                            <th>Pelanggan</th>
                                            <th>Keterangan</th>
											<th>Nama Barang</th>
											<th>Harga Jual(Rp)</th>
											<th>Jumlah</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
											<td>JL00001</td>
											<td>05-12-2017</td>
											<td>Momo</td>
											<td></td>
											<td>Kingston 8GB USB2.0</td>
											<td>40000</td>
											<td>2</td>
											<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>2</td>
											<td>JL00002</td>
											<td>07-12-2017</td>
											<td>Pil</td>
											<td></td>
											<td>SUN 2GB PC 6400 DDR2</td>
											<td>238000</td>
											<td>20</td>
											<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>3</td>
											<td>JL00002</td>
											<td>07-12-2017</td>
											<td>Pil</td>
											<td></td>
											<td>Kingston 8GB USB2.0</td>
											<td>40000</td>
											<td>3</td>
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