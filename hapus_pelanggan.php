<?php
include "koneksi.php";
$kdpelanggan = @$_GET['kdpelanggan'];

mysqli_query($connect, "delete from tb_pelanggan where kode_pelanggan = '$kdpelanggan'")or die (mysqli_error());
?>

<script type="text/javascript">
	window.location.href="?page=data_pelanggan";
</script>