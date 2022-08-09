<link rel="stylesheet" href="display.css">
<?php
include 'koneksi.php';
if (isset($_GET['idedit'])) {
  $id = $_GET['idedit'];
$q = $conn->query("SELECT * FROM t_obat WHERE kode_obat = '$id'");
foreach ($q as $dt) :
  ?>
  <div class="text">
  <h1>Pusing cuyyyyy</h1>
  <h2>Halaman Ubah Data</h2>
  </div>
<form action="edit-proses.php" method="post">
    <input type="text" name="kode_obat" value="<?= $dt['kode_obat'] ?>">
    <input type="text" name="nama_obat" value="<?= $dt['nama_obat'] ?>">
    <input type="text" name="jenis_obat" value="<?= $dt['jenis_obat'] ?>">
    <input type="text" name="kategori" value="<?= $dt['kategori'] ?>">
    <input type="text" name="harga" value="<?= $dt['harga'] ?>">
    <input type="text" name="jumlah" value="<?= $dt['jumlah'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}