<?php
	include("includes/koneksi.php");
	
	// Dapatkan extensi dari file yang diupload
	$ext = explode(".", $_FILES['gambar']['name']);
	$ext = end($ext);
	
	// deklarasi daftar extensi yang diperbolehkan
	$ext_boleh = Array("jpg", "png", "gif");
	// cek apakah extensi file ada di dalam list
	// dapatkan ukuran file:
	$size = $_FILES['gambar']['size'];
	$sumber = $_FILES['gambar']['tmp_name'];
	$tujuan = "uploads/" . $_FILES['gambar']['name'];
	
	$id = $_POST['id'];
	$kode_barang = mysqli_real_escape_string($db, $_POST['kode_barang']);
	$nama_barang = mysqli_real_escape_string($db, $_POST['nama_barang']);
	$stok = mysqli_real_escape_string($db, $_POST['stok']);
	$satuan = mysqli_real_escape_string($db, $_POST['satuan']);
	$kategori = $_POST['kategori'];
	$supplier = $_POST['supplier'];
	$harga_beli = mysqli_real_escape_string($db, $_POST['harga_beli']);
	$harga_jual = mysqli_real_escape_string($db, $_POST['harga_jual']);
	
	//3. query
	$query = "UPDATE pelanggan
			  SET kode = '$kode_pelanggan', nama_pelanggan = '$nama_pelanggan', alamat = '$alamat', no_telp = '$no_telp'
			  WHERE id='$id'";
	mysqli_query($db, $query);
	
	header('Location: data_barang.php');	
?>