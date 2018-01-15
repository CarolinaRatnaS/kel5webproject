<?php
include "koneksi.php";
$kdkategori = @$_GET['kdsupplier'];

mysqli_query($connect, "delete from tb_kategori where kode_supplier = '$kdsupplier'")or die (mysqli_error());
?>

<script type="text/javascript">
	window.location.href="?page=data_supplier";
</script>