<?php
	include("includes/koneksi.php");
	
	$id = $_POST['id'];
	$nota = mysqli_real_escape_string($db, $_POST['nota']);
	$tanggal = $_POST['tanggal'];
	$pelanggan = $_POST['pelanggan'];
	$keterangan = mysqli_real_escape_string($db, $_POST['keterangan']);
	
	function ubahTanggal($tanggal){
		 $pisah = explode('/',$tanggal);
		 $array = array($pisah[2],$pisah[0],$pisah[1]);
		 $satukan = implode('-',$array);
		 return $satukan;
		}
		
		$tanggal_ubah = ubahTanggal($tanggal);
	
	//3. query
	$query = "UPDATE penjualan
			  SET nota_jual = '$nota', tanggal = '$tanggal_ubah', keterangan = '$keterangan', pelanggan_id = '$pelanggan'
			  WHERE id='$id'";
	mysqli_query($db, $query);
	
	header('Location: penjualan.php');	
?>