<?php
	// 1. koneksi
	include("includes/koneksi.php");
	
	//3. query
	$id = $_GET['id'];
	
	$query = "DELETE FROM pelanggan
			  WHERE id=$id";
	mysqli_query($db, $query);
	
	header('Location: data_pelanggan.php');
?>