<?php

	echo 'id:';
	
	// Dapatkan extensi dari file yang diupload
	$ext = explode(".", $_FILES['gambar']['name']);
	$ext = end($ext);
	
	// deklarasi daftar extensi yang diperbolehkan
	$ext_boleh = Array("jpg", "png");
	// cek apakah extensi file ada di dalam list
	// dapatkan ukuran file:
	$size = $_FILES['gambar']['size'];
	$sumber = $_FILES['gambar']['tmp_name'];
	$tujuan = "uploads/" . $_FILES['gambar']['name'];

	echo $_POST['id_barang'];
	echo "<br>";
	echo $_POST['kode_barang'];
	echo "<br>";
	echo $_POST['nama'];
	echo "<br>";
	echo $_POST['gambar'];
	echo "<br>";
	echo $_POST['stok'];
	echo "<br>";
	echo $_POST['satuan'];
	echo "<br>";
	echo $_POST['kategori'];
	echo "<br>";
	echo $_POST['supplier'];
	echo "<br>";
	echo $_POST['harga_beli'];
	echo "<br>";
	echo $_POST['harga_jual'];

	include("includes/koneksi.php");

	if(in_array($ext, $ext_boleh) && $size <= 2*1024*1024){
		$gambar = move_uploaded_file($sumber, $tujuan);
		$query = "UPDATE barang
				set kode ='$_POST[kode_barang]',
				 nama ='$_POST[nama]',
				 stok ='$_POST[stok]',
				 satuan ='$_POST[satuan]',
				 kategori_id ='$_POST[kategori]',
				 supplier_id ='$_POST[supplier]',
				 harga_beli ='$_POST[harga_beli]',
				 harga_jual ='$_POST[harga_jual]'

			WHERE id= $_POST[id_barang]";

		mysqli_query($db, $query);
		
		echo $query;
	}

 	header('Location: data_barang.php'); 	
 
	
// 	$id = $_POST['id'];

// 	echo $_POST ['stok'];
	
// 	$kode = mysqli_real_escape_string($db, $_POST['kode']);
// 	$Nama = mysqli_real_escape_string($db, $_POST['Nama']);
// 	$Gambar = mysqli_real_escape_string($db, $_POST['Gambar']);
// 	$Stok = mysqli_real_escape_string($db, $_POST['Stok']);
// 	$Satuan = mysqli_real_escape_string($db, $_POST['Satuan']);
// 	$Kategori_id = mysqli_real_escape_string($db, $_POST['Kategori_id']);
// 	$Supplier_id = mysqli_real_escape_string($db, $_POST['supplier_id']);
// 	$harga_beli = mysqli_real_escape_string($db, $_POST['harga_beli']);
// 	$harga_jual = mysqli_real_escape_string($db, $_POST['harga_jual']);
	
// 	//3. query
// 	$query = "UPDATE barang
// 			  SET kode = '$kode', nama = '$nama' gambar = '$gambar' stok = '$stok' satuan = '$satuan' kategori_id = '$kategori_id' supplier_id = '$supplier_id' harga_beli = '$harga_beli' harga_jual = '$harga_jual' 
// 			  WHERE id='$id'";
// 	mysqli_query($db, $query);
	
 //	header('Location: data_barang.php');
 ?>