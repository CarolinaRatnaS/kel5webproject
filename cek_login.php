<?php
	include("functions.php");
	
	//if (!isAdmin() || !isPengguna()) {}
	
	if(isAdmin()) {
		include("includes/layouts/header_admin.php");
	} else if (isPengguna()) {
		include("includes/layouts/header_user.php");
	} else {
		header('location: login_akun.php');
	}
?>