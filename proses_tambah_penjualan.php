<?php
	session_start();
	include("includes/koneksi.php");
	
	if(isset($_POST['simpan_nota'])) {
	//PROSES PEMBELIAN
		$nota = mysqli_real_escape_string($db, $_POST['nota']);
		$tanggal = $_POST['tanggal'];
		$supplier = $_POST['pelanggan'];
		$keterangan = mysqli_real_escape_string($db, $_POST['keterangan']);
		$simpan_transaksi = $_POST['simpan_transaksi'];
		
		function ubahTanggal($tanggal){
		 $pisah = explode('/',$tanggal);
		 $array = array($pisah[2],$pisah[0],$pisah[1]);
		 $satukan = implode('-',$array);
		 return $satukan;
		}
		
		$tanggal_ubah = ubahTanggal($tanggal);
		
		$query1 = "INSERT INTO penjualan (nota_jual, tanggal, keterangan, pelanggan_id) VALUES ('$nota', '$tanggal_ubah', '$keterangan', '$pelanggan')";
		mysqli_query($db, $query1);
		
		//for($i = 0; $i <= count($tmp_barang); $i++){
		//	$query = "INSERT INTO pembelian_detil (barang_id, jumlah, harga_beli) VALUES ('$tmp_barang[$i]','$tmp_jumlah[$i]','$tmp_hargabeli[$i]')";
		//	mysqli_query($db, $query);			
		//}
		header('Location: tambah_penjualan_barang.php');
	}
	
	
		
?>  
