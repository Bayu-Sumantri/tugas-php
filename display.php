<!DOCTYPE html>
<html>
<head>
	<title>PUSING CUY NGAB NGAB </title>
</head>
<link rel="stlesheet" type="text/css" href="display.css">
<body>
 
	<h2>CRUD DATA NGOBAT</h2>
	<br/>
	<a href="form_mhs.php">+ TAMBAH DATA NGOBAT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>no</th>
			<th>kode_obat</th>
			<th>nama_obat</th>
			<th>jenis_obat</th>
			<th>kategori</th>
			<th>harga</th>
			<th>jumlah</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"SELECT * FROM t_obat");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_obat']; ?></td>
				<td><?php echo $d['nama_obat']; ?></td>
				<td><?php echo $d['jenis_obat']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
				<td>
					<a href="edit.php?idedit=<?php echo $d['kode_obat']; ?>">EDIT <?php echo $d['kode_obat']; ?></a>
					<a href="hapusx.php?idhapus=<?php echo $d['kode_obat']; ?>">HAPUS <?php echo $d['kode_obat']; ?></a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
	</html>