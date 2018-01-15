<?php //logout.php
	session_start();
	
	$_SESSION['user'] = null;
	session_destroy();
	header('Location: login_akun.php');
?>