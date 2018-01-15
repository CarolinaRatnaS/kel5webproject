<?php include "koneksi.php"; ?>
<fieldset>
    <legend>Edit Data Pelanggan</legend>

    <?php
    $kdpelanggan = @$_GET['kdpenjualan'];
    $sql = mysqli_query($connect , "select * from tb_penjualan where no_Penjualan = '$kdpenjualan'") or die (mysql_error()); 
    $data = mysqli_fetch_array($sql)
    ?>
        <form action="" method="post">
        <table>
            <tr>
                <td>No. Penjualan</td>
                <td>:</td>
                <td><input type="text" name="no_penjualan" value="<?php echo $data['no_Penjualan']; ?>" disabled="disabled" /></td>
            </tr>
            <tr>
                <td>Tanggal </td>
                <td>:</td>
                <td><input type="text" name="Tanggal" value="<?php echo $data['Tanggal']; ?>"/></td>
            </tr>
            <tr>
                <td>Pelanggan</td>
                <td>:</td>
                <td><input type="text" name="Pelanggan" value="<?php echo $data['Pelanggan']; ?>"/></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><input type="text" name="Keterangan" value="<?php echo $data['Keterangan']; ?>"/></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="Nama_Barang" value="<?php echo $data['Nama_Barang']; ?>"/></td>
            </tr>
            <tr>
                <td>Harga Jual(Rp)</td>
                <td>:</td>
                <td><input type="text" name="Harga_Jual" value="<?php echo $data['Harga_Jual']; ?>"/></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="jumlah" value="<?php echo $data['Jumlah']; ?>"/></td>
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
    $Alamat = @$_POST['Alamat'];
    $No_telp = @$_POST['No_telp'];


    $edit_supplier = @$_POST['edit'];

    if($edit_pelanggan) {
        if($Nama == "" || $Alamat == "" || $No_telp == "") {
            ?>
            <script type="text/javascript">
                alert("Inputan tidak boleh ada yang kosong");
            </script>

                
                </script>
                <?php
        } else {
            mysqli_query($connect , "update tb_supplier set Nama = '$Nama', Alamat = '$Alamat', No_telp = '$No_telp' where kode_Supplier = '$kdsupplier' ") or die (mysqli_error());
                ?>
                <script type="text/javascript">
                alert("Data berhail di edit");
                window.location.href="?page=data_supplier";
                </script>
            <?php
        }
    }
    ?>
</fieldset>