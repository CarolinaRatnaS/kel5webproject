<?php
	include("includes/koneksi.php");
	
	$id = $_POST['id'];
	$kode_supplier = mysqli_real_escape_string($db, $_POST['kode_supplier']);
	$nama_supplier = mysqli_real_escape_string($db, $_POST['nama_supplier']);
	$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
	$no_telp = mysqli_real_escape_string($db, $_POST['no_telp']);
	
	//3. query
	$query = "UPDATE supplier
			  SET kode = '$kode_supplier', nama_supplier = '$nama_supplier', alamat = '$alamat', no_telp = '$no_telp'
			  WHERE id='$id'";
	mysqli_query($db, $query);
	
	header('Location: data_supplier.php');	
?>