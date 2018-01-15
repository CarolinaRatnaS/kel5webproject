<?php
	//proses_tambah_kategori.php
	
	include("includes/koneksi.php");
	
	//data dari form
	$kode_kategori = mysqli_real_escape_string($db, $_POST['kode_kategori']);
	$nama_kategori = mysqli_real_escape_string($db, $_POST['nama_kategori']);
	
	$query = "INSERT INTO kategori (kode, nama_kategori) VALUES ('$kode_kategori', '$nama_kategori')";
	mysqli_query($db, $query);
	
	header('Location: data_kategori.php');
?>