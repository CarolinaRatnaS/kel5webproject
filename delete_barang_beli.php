<?php
	// 1. koneksi
	include("includes/koneksi.php");
	
	//3. query
	$id = $_GET['id'];
	
	$query = "DELETE FROM pembelian_detil
			  WHERE id=$id";
	mysqli_query($db, $query);
	
	header('Location: tampil_barang_beli.php');
?>