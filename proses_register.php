<?php
	include("cek_login.php");
	
	if(!isAdmin()) {
			echo "<script>window.location = history.go(-1);</script>";
		}

	include("includes/koneksi.php");
	
	//data dari form
	$id_user = mysqli_real_escape_string($db, $_POST['id_user']);
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$no_telp = mysqli_real_escape_string($db, $_POST['no_telp']);
	$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$level= $_POST['level'];
	
	$query = "INSERT INTO user (id_user, nama, no_telp, alamat, password, level) VALUES ('$id_user', '$nama', '$no_telp', '$alamat', '$password', '$level')";
	mysqli_query($db, $query);
	
	header('Location: data_pengguna.php');
?>