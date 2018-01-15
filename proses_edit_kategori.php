<?php include("cek_login.php"); ?>
<?php
	include("includes/koneksi.php");
	
	$id = $_POST['id'];
	$kode_kategori = mysqli_real_escape_string($db, $_POST['kode_kategori']);
	$nama_kategori = mysqli_real_escape_string($db, $_POST['nama_kategori']);
	
	//3. query
	$query = "UPDATE kategori
			  SET kode = '$kode_kategori', nama_kategori = '$nama_kategori'
			  WHERE id='$id'";
	mysqli_query($db, $query);
	
	header('Location: data_kategori.php');	
?>