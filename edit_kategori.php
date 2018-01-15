<?php include "koneksi.php"; ?>
<fieldset>
	<legend>Edit Data Kategori</legend>

	<?php
	$kdkategori = @$_GET['kdkategori'];
	$sql = mysqli_query($connect , "select * from tb_kategori where kode_Barang = '$kdkategori'") or die (mysql_error());
	$data = mysqli_fetch_array($sql)
	?>
		<form action="" method="post">
		<table>
			<tr>
				<td>Kode Barang</td>
				<td>:</td>
				<td><input type="text" name="kode_Barang" value="<?php echo $data['kode_Barang']; ?>" disabled="disabled" /></td>
			</tr>
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"/></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="Edit" /> <input type="reset" value="Batal" /></td>
			</tr>
		</table>
	</form>

	<?php
	$Nama = @$_POST['Nama'];


	$edit_supplier = @$_POST['edit'];

	if($edit_kategori) {
		if($Nama == "") {
			?>
			<script type="text/javascript">
				alert("Inputan tidak boleh ada yang kosong");
			</script>

				
				</script>
				<?php
		} else {
			mysqli_query($connect , "update tb_kategori set Nama = '$Nama' where kode_kategori = '$kdkategori' ") or die (mysqli_error());
				?>
				<script type="text/javascript">
				alert("Data berhail di edit");
				window.location.href="?page=data_kategori";
				</script>
			<?php
		}
	}
	?>
</fieldset>