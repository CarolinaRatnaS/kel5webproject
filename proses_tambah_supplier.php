<?php
	//proses_tambah_supplier.php
	
	include("includes/koneksi.php");
	
	//data dari form
	$kode_supplier = mysqli_real_escape_string($db, $_POST['kode_supplier']);
	$nama_supplier = mysqli_real_escape_string($db, $_POST['nama_supplier']);
	$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
	$no_telp = mysqli_real_escape_string($db, $_POST['no_telp']);
	
	$query = "INSERT INTO supplier (kode, nama_supplier, alamat, no_telp) VALUES ('$kode_supplier', '$nama_supplier', '$alamat', '$no_telp')";
	mysqli_query($db, $query);
	
	header('Location: data_supplier.php');
?>