<!DOCTYPE html>
<html>

<head>
    <tittle>FORM DATA NGOBAT</tittle>
</head>

<body>
    <?php
    echo "BY BANH HYU AND PAK TRIII"
    ?>

    <fieldset>
        <legend> FORM OBAT</legend>
        <form method="POST" action="proses.php">
            <table border="0">
                <tr>
                    <td>kode_obat</td>
                    <td><input type="text" name="kode_obat" required></td>
                </tr>
                <tr>
                    <td>nama_obat</td>
                    <td><input type="text" name="nama_obat"></td>
                </tr>
                <tr>
                    <td>jenis_obat</td>
                    <td><input type="text" name="jenis_obat"></td>
                </tr>
                <tr>
                    <td>kategori</td>
                    <td><input type="text" name="kategori"></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>jumlah</td>
                    <td><input type="text" name="jumlah"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name"simpan" value="simpan">
                    <input type='button'value='display'onClick='top.location="display.php"'class='button'class="display">   
                </td> 
                </tr>
            </table>

        </form>
    </fieldset>
</body>

</html>