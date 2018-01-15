<?php
session_start();

include("includes/koneksi.php");
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $id_user, $errors;

	// grap form values
	$id_user = $_POST['id_user'];
	$password = $_POST['password'];

	// make sure form is filled properly
	if (empty($id_user)) {
		array_push($errors, "ID User tidak boleh kosong!");
	}
	if (empty($password)) {
		array_push($errors, "Password tidak boleh kosong!");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		//$password = md5($password);

		$query = "SELECT * FROM user WHERE id_user='$id_user' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['level'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: data_barang.php');		  
			}else if ($logged_in_user['level'] == 'pegawai'){
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: data_barang.php');
			}
		}else {
			array_push($errors, "ID User / Password salah.");
		}
	}
}

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['level'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

function isPengguna()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['level'] == 'pegawai' ) {
		return true;
	}else{
		return false;
	}
}
?>