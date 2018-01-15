<?php
include "koneksi.php";
$kdkategori = @$_GET['kdkategori'];

mysqli_query($connect, "delete from tb_kategori where kode_kategori = '$kdkategori'")or die (mysqli_error());
?>

<script type="text/javascript">
	window.location.href="?page=data_kategori";
</script>