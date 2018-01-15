<?php
	//proses_tambah_pelanggan.php
	
	include("includes/koneksi.php");
	
	//data dari form
	$kode_pelanggan = mysqli_real_escape_string($db, $_POST['kode_pelanggan']);
	$nama_pelanggan = mysqli_real_escape_string($db, $_POST['nama_pelanggan']);
	$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
	$no_telp = mysqli_real_escape_string($db, $_POST['no_telp']);
	
	$query = "INSERT INTO pelanggan (kode, nama_pelanggan, alamat, no_telp) VALUES ('$kode_pelanggan', '$nama_pelanggan', '$alamat', '$no_telp')";
	mysqli_query($db, $query);
	
	header('Location: data_pelanggan.php');
?>