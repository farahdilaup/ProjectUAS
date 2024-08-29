<div class="halaman">
	<!DOCTYPE html>
<html>
<head>
	<title>Project UAS Pemograman Basis Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1 align=center>Tabel Data Jadwal Pemberangkatan</h1>
	<br/>
	<a href="tambahjd.php" class='tombol'>Tambah Jadwal</a>
	<br/>
	<br/>
	<br/>
	<table  border="5" cellpadding="2" cellspacing="2" align="center">
		<tr bgcolor="cyan">
			<th align="center">NO</th>
			<th align="center">ID Penjadwalan</th>
			<th align="center">Asal perusahaan</th>
			<th align="center">Jumlah sopir</th>
			<th align="center">Tanggal berangkat</th>
			<th align="center">Waktu berangkat</th>
			<th align="center">Tempat tujuan</th>
			<th align="center">Alamat tujuan</th>
			<th align="center">ID Kota</th>
			<th align="center">ID Penyewaan</th>
			<th align="center">ID Pengguna</th>
			<th align="center">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from jadwal_pemberangkatan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['ID_penjadwalan']; ?></td>
				<td><?php echo $d['asal_perusahaan']; ?></td>
				<td><?php echo $d['sopir_yg_dibutuhkan']; ?></td>
				<td><?php echo $d['tgl_berangkat']; ?></td>
				<td><?php echo $d['wkt_berangkat']; ?></td>
				<td><?php echo $d['nama_tempat_tujuan']; ?></td>
				<td><?php echo $d['alamat_tujuan']; ?></td>
				<td><?php echo $d['ID_KOTA']; ?></td>
				<td><?php echo $d['no_penyewaan']; ?></td>
				<td><?php echo $d['ID_pengguna']; ?></td>
				<td>
					<a href="editjd.php?ID_penjadwalan=<?php echo $d['ID_penjadwalan'] ?>" class="tombol1">EDIT</a>
					<a href="hapusjd.php?ID_penjadwalan=<?php echo $d['ID_penjadwalan'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="tombol2">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</div>