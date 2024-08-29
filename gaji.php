<div class="halaman">
	<!DOCTYPE html>
<html>
<head>
	<title>Project UAS Pemograman Basis Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1 align=center>Tabel Data Riwayat Penggajian</h1>
	<br/>
	<br/>
	<table  border="5" cellpadding="3" cellspacing="3" align="center">
		<tr bgcolor="cyan">
			<th align="center">NO</th>
			<th align="center">ID Penggajian</th>
			<th align="center">Tanggal Penggajian</th>
			<th align="center">Besar Gaji</th>
			<th align="center">Tambah Gaji</th>
			<th align="center">Jenis bonus</th>
			<th align="center">Total gaji</th>
			<th align="center">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from gaji");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['ID_penggajian']; ?></td>
				<td><?php echo $d['TanggalPenggajian']; ?></td>
				<td><?php echo $d['BesarGaji']; ?></td>
				<td><?php echo $d['TambahGaji']; ?></td>
				<td><?php echo $d['Jenisbonus']; ?></td>
				<td><?php echo $d['TotalGaji']; ?></td>
				<td><?php echo $d['AKSI']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</div>