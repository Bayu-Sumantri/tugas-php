<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
  $kode_obat = $_POST['kode_obat'];
  $nama_obat = $_POST['nama_obat'];
  $jenis_obat = $_POST['jenis_obat'];
  $kategori = $_POST['kategori'];
  $harga = $_POST['harga'];
  $jumlah = $_POST['jumlah'];
  $q = $conn->query("UPDATE t_obat SET kode_obat = '$kode_obat', nama_obat = '$nama_obat', jenis_obat = '$jenis_obat', kategori = '$kategori', harga = '$harga', jumlah = '$jumlah'  WHERE kode_obat = '$kode_obat'");
  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='form_mhs.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='form_mhs.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: display.php');
}
