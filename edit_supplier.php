<?php include "koneksi.php"; ?>
<fieldset>
    <legend>Edit Data Pelanggan</legend>

    <?php
    $kdpelanggan = @$_GET['kdsupplier'];
    $sql = mysqli_query($connect , "select * from tb_supplier where kode_Supplier = '$kdsupplier'") or die (mysql_error()); 
    $data = mysqli_fetch_array($sql)
    ?>
        <form action="" method="post">
        <table>
            <tr>
                <td>Kode Supplier</td>
                <td>:</td>
                <td><input type="text" name="kode_supplier" value="<?php echo $data['kode_Supplier']; ?>" disabled="disabled" /></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"/></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>"/></td>
            </tr>
            <tr>
                <td>No telp</td>
                <td>:</td>
                <td><input type="text" name="No_telp" value="<?php echo $data['No_telp']; ?>"/></td>
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