<?php
include "koneksi.php";
$kdkategori = @$_GET['kdpenjualan'];

mysqli_query($connect, "delete from tb_penjualan where no_penjualan = '$kdpenjualan'")or die (mysqli_error());
?>

<script type="text/javascript">
	window.location.href="?page=penjualan";
</script>