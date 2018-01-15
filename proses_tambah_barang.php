<?php
	//proses_tambah_barang.php
	
	include("includes/koneksi.php");
	
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
	
	//data dari form
	$kode_barang = mysqli_real_escape_string($db, $_POST['kode_barang']);
	$nama_barang = mysqli_real_escape_string($db, $_POST['nama_barang']);
	$stok = mysqli_real_escape_string($db, $_POST['stok']);
	$satuan = mysqli_real_escape_string($db, $_POST['satuan']);
	$kategori = $_POST['kategori'];
	$supplier = $_POST['supplier'];
	$harga_beli = mysqli_real_escape_string($db, $_POST['harga_beli']);
	$harga_jual = mysqli_real_escape_string($db, $_POST['harga_jual']);
	
	
	if(in_array($ext, $ext_boleh) && $size <= 2*1024*1024){
		//echo "file valid";
		$gambar = move_uploaded_file($sumber, $tujuan);
		$query = "INSERT INTO barang (kode, nama, gambar, stok, satuan, kategori_id, supplier_id, harga_beli, harga_jual) VALUES ('$kode_barang', '$nama_barang', '$tujuan', '$stok', '$satuan', '$kategori', '$supplier', '$harga_beli', '$harga_jual')";
		mysqli_query($db, $query);
	}
	
	header('Location: data_barang.php');
?>