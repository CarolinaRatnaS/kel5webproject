<?php
	include("includes/koneksi.php");
	
	$id = $_POST['id'];
	$nota = mysqli_real_escape_string($db, $_POST['nota']);
	$tanggal = $_POST['tanggal'];
	$supplier = $_POST['supplier'];
	$keterangan = mysqli_real_escape_string($db, $_POST['keterangan']);
	
	function ubahTanggal($tanggal){
		 $pisah = explode('/',$tanggal);
		 $array = array($pisah[2],$pisah[0],$pisah[1]);
		 $satukan = implode('-',$array);
		 return $satukan;
		}
		
		$tanggal_ubah = ubahTanggal($tanggal);
	
	//3. query
	$query = "UPDATE pembelian
			  SET nota_beli = '$nota', tanggal = '$tanggal_ubah', keterangan = '$keterangan', supplier_id = '$supplier'
			  WHERE id='$id'";
	mysqli_query($db, $query);
	
	header('Location: pembelian.php');	
?>