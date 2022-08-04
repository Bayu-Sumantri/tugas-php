<!DOCTYPE html>
<html>

<head>
    <tittle>FORM DATA MAHASISWA</tittle>
</head>

<body>
    <?php
    include "koneksi.php";

    // $kode_obat = $_POST['kode_obat'];
  /*  $nama_obat = ["nama_obat"];
    $jenis_obat = $_POST["jenis_obat"];
     $kategori = $_POST["kategori"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];
*/
    
        // $query=mysqli_query("insert into T_obat values('$kode_obat','$nama_obat',$jenis_obat','$kategori,'$haga',$jumlah')") or die('mysqli_error'());
        $sql = "INSERT INTO t_obat (kode_obat, nama_obat, jenis_obat, kategori, harga, jumlah) VALUES ( '1', '1', '1', '1','1', '1' )";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      
    
    ?>  
    <fieldset>
        <legend> FORM MAHASISWA</legend>
        <form method="post ">
            <table border="0">
                <tr>
                    <td>kode_obat</td>
                    <td><input type="text" name="kode_obat"></td>
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
                    <td colspan="2"><input type="submit" name"simpan" value="Simpan"></td>
                </tr>
            </table>

        </form>
    </fieldset>
</body>

</html>