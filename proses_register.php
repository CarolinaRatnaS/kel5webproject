<?php

	include("includes/koneksi.php");
	
	if(isset($_POST['register'])) {
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
	}
?>