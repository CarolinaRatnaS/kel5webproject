<?php
	session_start();
	if(!isset($_SESSION['count'])) {
		$_SESSION['count'] = 0;
	}
	
	if(isset($_POST['tambah_barang'])) {
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
	}
	
	//PROSES PEMBELIAN
	$nota = mysqli_real_escape_string($db, $_POST['nota']);
	$tanggal = $_POST['tanggal'];
	$supplier = $_POST['supplier'];
	$pembelian_id = $_POST["pembelian_id"];
	$keterangan = mysqli_real_escape_string($db, $_POST["keterangan"]);
	$simpan_transaksi = $_POST['simpan_transaksi'];
	
	function ubahTanggal($tanggal){
	 $pisah = explode('/',$tanggal);
	 $array = array($pisah[2],$pisah[0],$pisah[1]);
	 $satukan = implode('-',$array);
	 return $satukan;
	}
	
	$tanggal_ubah = ubahTanggal($tanggal);
	
	if(isset($simpan_transaksi)) {
		if(empty($nota) or empty($tanggal) or empty($supplier)) {
			echo"<script>window.alert('Form tidak boleh kosong');
			window.location=('tambah_pembelian.php');</script>";
		}
		
	}
	
	//INSERT DATABASE
	if(isset($_POST["simpan_transaksi"])) {
		$query1 = "INSERT INTO pembelian (nota_beli, tanggal, keterangan, supplier_id) VALUES ('$nota', '$tanggal_ubah', '$keterangan', '$supplier')";
		mysqli_query($db, $query1);
		
		//for($i = 0; $i <= count($tmp_barang); $i++){
			//$query = mysqli_query("INSERT INTO pembelian_detil () VALUES ( '". $tmp_barang[$i]."','".$tmp_jumlah[i]."','".$tmp_hargabeli."' )");

			//mysqli_query($db, $query);
			
		//}
		header('Location: tambah_pembelian.php');
	}
	
	//$index = $_GET['index'];
	//$tmp_barang[$index]=null;
	//$_SESSION['tmpbarang']=$tmp_barang;
	
	header('Location: tambah_pembelian.php');
?>