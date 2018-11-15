<?php
	session_start();
	
	include("includes/koneksi.php");
	
	$id = $_SESSION['user']['id_user'];
	
	$id = $_POST['id'];
	$id_user = mysqli_real_escape_string($db, $_POST['id_user']);
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$no_telp = mysqli_real_escape_string($db, $_POST['no_telp']);
	$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
	
	$query = "UPDATE user
			  SET id_user = '$id_user', nama = '$nama', no_telp = '$no_telp', alamat = '$alamat'
			  WHERE id='$id'";
	mysqli_query($db, $query);
	
	header('Location: edit_profile_user.php');
?>