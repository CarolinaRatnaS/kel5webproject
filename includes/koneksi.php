<?php
	//1. membuat koneksi
	$db = mysqli_connect("localhost", "root", "", "db_inventory");
	
	//2. test jika koneksi gagal
	if(mysqli_connect_errno()) {
		die("Database connection failed: " .
		mysqli_connect_error() .
		" (" . mysqli_connect_errno() . ")"
	);
	}
?>