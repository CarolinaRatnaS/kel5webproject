<?php
session_start();
include("includes/koneksi.php");

	if(!isset($_SESSION['count'])) {
		$_SESSION['count'] = 0;
	}
	
	if(isset($_POST['tambah_barang1'])) {
		$c = $_SESSION['count'];
		
		$brg_tmp['$c'] = $_POST;
		
		// jika yang diklik tombol simpan, maka tambahkan array datanya
		//*ambil data dari session
		if (isset($_SESSION['tmpbarang'])) {
			$tmp_barang=$_SESSION['tmpbarang'];
		}
		if (isset($_SESSION['tmpjumlah'])) {
			$tmp_jumlah=$_SESSION['tmpjumlah'];
		}
		if (isset($_SESSION['tmphargabeli'])) {
			$tmp_hargabeli=$_SESSION['tmphargabeli'];
		}
		//*end script ambil data dari session
		
		//**tambahkan array (hasil dari data session tadi) dengan data inputan yang baru
		$tmp_barang[]=$_POST['barang'];
		$tmp_jumlah[]=$_POST['jumlah'];
		$tmp_hargabeli[]=$_POST['harga_beli'];
		//**end script tambah array
		
		//***simpan data array yang baru ke session
		$_SESSION['tmpbarang']=$tmp_barang;
		$_SESSION['tmpjumlah']=$tmp_jumlah;
		$_SESSION['tmphargabeli']=$tmp_hargabeli;
		//***en dscript simpan ke session
		
		$_SESSION['brg'] = array_merge($_SESSION['tmpbarang'], $_SESSION['tmpjumlah'], $_SESSION['tmphargabeli'], $brg_tmp);
		$_SESSION['count'] +=1;
		header('Location: tambah_pembelian_barang.php');
	}
	
	if(isset($_POST['tambah_barang'])) {
		$nota = $_POST['nota'];
		$barang = $_POST['barang'];
		$jumlah = mysqli_real_escape_string($db, $_POST['jumlah']);
		$harga_jual = mysqli_real_escape_string($db, $_POST['harga_jual']);
		
		//for($i = 0; $i <= count($tmp_barang); $i++){
		//	$query1 = "INSERT INTO pembelian_detil (pembelian_id, barang_id, jumlah, harga_beli) VALUES ('$nota', '".$tmp_barang['$i']."','".$tmp_jumlah['$i']."','".$tmp_hargabeli['$i']."')";
		//	mysqli_query($db, $query1);			
		//}
		
		$query2 = "INSERT INTO penjualan_detil (penjualan_id, barang_id, jumlah, harga_jual) VALUES ('$nota', '$barang', '$jumlah', '$harga_jual')";
		mysqli_query($db, $query2);
		header('Location: tambah_penjualan_barang.php');
	}
	
	if(isset($_POST['simpan_penjualan'])) {
		header('Location: tampil_barang_jual.php');
	}
?>