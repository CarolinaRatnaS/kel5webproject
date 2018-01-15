<?php
	session_start();
	
	include("includes/koneksi.php");
	
	$id = $_SESSION['user']['id_user'];
	
	$id = $_POST['id'];
	$pwold = mysqli_real_escape_string($db, $_POST['pwold']);
	$pwnew = mysqli_real_escape_string($db, $_POST['pwnew']);
	
	$query = "SELECT * FROM user WHERE password = '$pwold' LIMIT 1";
	$hasil = mysqli_query($db, $query);
	
	//3. query
	if(mysqli_num_rows($hasil) == 1){
	$query = "UPDATE user
			  SET password = '$pwnew' WHERE id='$id'";
	mysqli_query($db, $query);
	
	header('Location: edit_profile_admin.php');
	}	
?>