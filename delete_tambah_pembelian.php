<?php 

$index = $_GET['index'];
$tmp_barang[$index]=null;
$_SESSION['tmpbarang']=$tmp_barang;
echo "<pre>";
print_r($_SESSION);
//header("Location: tambah_pembelian.php");
?>