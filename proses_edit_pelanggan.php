<?php
	include("includes/koneksi.php");
	
	$id = $_POST['id'];
	$kode_pelanggan = mysqli_real_escape_string($db, $_POST['kode_pelanggan']);
	$nama_pelanggan = mysqli_real_escape_string($db, $_POST['nama_pelanggan']);
	$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
	$no_telp = mysqli_real_escape_string($db, $_POST['no_telp']);
	
	//3. query
	$query = "UPDATE pelanggan
			  SET kode = '$kode_pelanggan', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', no_telp = '$no_telp'
			  WHERE id='$id'";
	mysqli_query($db, $query);
	
	header('Location: data_pelanggan.php');	
?>