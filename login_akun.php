<?php include('functions.php') ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Toko Komputer</title>
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
	.textfield{
		opacity:0.7;
	}
	.container{
		margin:250px auto;
		width:450px;
		height:390px;
		text-align:center;
		background-color:#F7F7F7;
		border:1px solid #BFBFBF;
		box-shadow:0px 0px 3px #BFBFBF;
	}	

	</style>
</head>
<body>

<?php
	//koneksi
	include("includes/koneksi.php");
	
	$query = "SELECT * FROM kategori";
	$hasil = mysqli_query($db, $query);

?>

        <!-- /. NAV SIDE  -->
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Login</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
					<div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Masukkan ID User dan Password Anda
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form role="form" action="login_akun.php" method="post">
                                        <div class="form-group">
                                            <label>ID User</label>
                                            <input class="form-control" type="text" name="id_user" />
                                        </div>
										<div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" />
                                        </div>
										<input type="submit" class="btn btn-default" name="login_btn" value="Sign In" />
                                    </form>
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