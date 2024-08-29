<div class="halaman">
	<!DOCTYPE html>
<html>
<head>
	<title>Project UAS Pemograman Basis Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1 align=center>Tabel Data Penggajian</h1>
	<br/>
	<a href="tambahgj.php" class='tombol'>Tambah Penggajian</a>
	<br/>
	<?php
	include 'koneksi.php';
	$query = mysqli_query($koneksi, "SELECT max(ID_penggajian) as kodeTerbesar FROM penggajian");
	$data = mysqli_fetch_array($query);
	$kodegj = $data['kodeTerbesar'];
	$urutan = (int) substr($kodegj, 2, 5);
	$urutan++;
	$huruf = "GJ";
	$kodegj = $huruf . sprintf("%05s", $urutan);
	?>
	<br/>
	<br/>
	<table  border="5" cellpadding="3" cellspacing="3" align="center">
		<tr bgcolor="cyan">
			<th align="center">NO</th>
			<th align="center">ID Penggajian</th>
			<th align="center">ID Pegawai</th>
			<th align="center">ID Pengguna</th>
			<th align="center">ID Penjadwalan</th>
			<th align="center">Tanggal Penggajian</th>
			<th align="center">Besar Gaji</th>
			<th align="center">Tambahan Gaji</th>
			<th align="center">Jenis Bonus</th>
			<th align="center">Total Gaji</th>
			<th align="center">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from penggajian");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['ID_penggajian']; ?></td>
				<td><?php echo $d['id_pegawai']; ?></td>
				<td><?php echo $d['ID_pengguna']; ?></td>
				<td><?php echo $d['ID_penjadwalan']; ?></td>
				<td><?php
echo date('d-m-Y');
?></td>
				<td><?php echo $d['BesarGaji']; ?></td>
				<td><?php echo $d['TambahGaji']; ?></td>
				<td><?php echo $d['Jenisbonus']; ?></td>
				<td><?php echo $d['TotalGaji']; ?></td>
				<td>
					<a href="editgj.php?ID_penggajian=<?php echo $d['ID_penggajian'] ?>" class="tombol1">EDIT</a>
					<a href="hapusgj.php?ID_penggajian=<?php echo $d['ID_penggajian'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="tombol2">HAPUS</a>
					
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</div>