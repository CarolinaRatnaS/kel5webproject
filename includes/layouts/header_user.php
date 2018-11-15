<?php
	
	include("includes/koneksi.php");
	
	$nama = $_SESSION['user']['id_user'];
	
	$query = "SELECT * FROM user WHERE id_user = '$nama'";
	$hasil = mysqli_query($db, $query);
	$row = mysqli_fetch_assoc($hasil);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toko Komputer</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   <!-- <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" /> -->
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fjhgsdfghjionts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<!-- DATA DATE PICKER -->
	<link href="jquery-ui-1.11.4/smoothness/jquery-ui.css" rel="stylesheet" />
	  <script src="jquery-ui-1.11.4/external/jquery/jquery.js"></script>
	  <script src="jquery-ui-1.11.4/jquery-ui.js"></script>
	  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
	  <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.theme.css" />
	  <script>
	   $(document).ready(function(){
		   $("#tanggal").datepicker({
			   //showButtonPanel: true,
                  //minDate: new Date(),
                 // showTime: true
		   })
	   })
	  </script>
	  <style>
            .pesan{
                display: none;
                position: fixed;
                border: 1px solid blue;
                width: 200px;
                top: 10px;
                left: 200px;
                padding: 5px 10px;
                background-color: lightskyblue;
                text-align: center;
            }
        </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="data_barang.php">Toko Komputer</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Selamat datang, <?php  if (isset($_SESSION['user'])) : ?><?php echo $row["nama"]; ?><?php endif ?><i  style="color: #888;"> (Pegawai)</i> &nbsp; <a href="edit_profile_user.php" class="btn btn-danger square-btn-adjust">Edit Profile</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a href="data_barang.php"></i>Data Barang</a>
                    </li>
                    <li>
						<a href="data_supplier.php">Data Supplier</a>
                    </li>
					<li>
						<a href="data_kategori.php">Data Kategori</a>
                    </li>
					<li>
                        <a href="data_pelanggan.php">Data Pelanggan</a>
                    </li>
					<li>
                        <a  href="pembelian.php">Pembelian</a>
                    </li>
					<li>
                        <a  href="penjualan.php">Penjualan</a>
                    </li>
					<li>
                        <a  href="logout.php">Logout</a>
                    </li>
                    <!--<li>
                        <a  href="tab-panel.php"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.php"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                    <li>
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.php"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.php"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li> -->
                </ul>
               
            </div>
            
        </nav>  