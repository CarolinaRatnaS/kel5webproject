<?php
	session_start();
	include("includes/koneksi.php");
	
	//*ambil data dari session
		$tmp_barang=$_SESSION['tmpbarang'];
		$tmp_jumlah=$_SESSION['tmpjumlah'];
		$tmp_hargabeli=$_SESSION['tmphargabeli'];
		//*end script ambil data dari session
	
	//for($test = 0; $test <= count($team); $test++){
    //$sql = mysql_query("INSERT INTO 'schedule' (home) VALUES  ('" . $team[$test]) . "')");

	//$result = mysql_query($sql);s
	//}
	if(isset($_POST['simpan_nota'])) {
	//PROSES PEMBELIAN
		$nota = mysqli_real_escape_string($db, $_POST['nota']);
		$tanggal = $_POST['tanggal'];
		$supplier = $_POST['supplier'];
		$keterangan = mysqli_real_escape_string($db, $_POST['keterangan']);
		$simpan_transaksi = $_POST['simpan_transaksi'];
		
		function ubahTanggal($tanggal){
		 $pisah = explode('/',$tanggal);
		 $array = array($pisah[2],$pisah[0],$pisah[1]);
		 $satukan = implode('-',$array);
		 return $satukan;
		}
		
		$tanggal_ubah = ubahTanggal($tanggal);
		
		$query1 = "INSERT INTO pembelian (nota_beli, tanggal, keterangan, supplier_id) VALUES ('$nota', '$tanggal_ubah', '$keterangan', '$supplier')";
		mysqli_query($db, $query1);
		
		//for($i = 0; $i <= count($tmp_barang); $i++){
		//	$query = "INSERT INTO pembelian_detil (barang_id, jumlah, harga_beli) VALUES ('$tmp_barang[$i]','$tmp_jumlah[$i]','$tmp_hargabeli[$i]')";
		//	mysqli_query($db, $query);			
		//}
		header('Location: pembelian.php');
	}
	
	
		
?>  
