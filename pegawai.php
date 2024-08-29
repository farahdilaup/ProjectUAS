<div class="halaman">
	<!DOCTYPE html>
<html>
<head>
	<title>Project UAS Pemograman Basis Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1 align=center>Tabel Data Pegawai</h1>
	<br/>
	<a href="tambahpeg.php" class='tombol'>Tambah Pegawai</a>
	<br/>
	<?php
	include 'koneksi.php';
	$query = mysqli_query($koneksi, "SELECT max(id_pegawai) as kodeTerbesa FROM pegawai");
	$data = mysqli_fetch_array($query);
	$kodepg = $data['kodeTerbesa'];
	$urutn = (int) substr($kodepg, 3, 3);
	$urutn++;
	$huruf = "PGW";
	$kodepg = $huruf . sprintf("%03s", $urutn);
	?>
	<br/>
	<br/>
	<table  border="5" cellpadding="3" cellspacing="3" align="center">
		<tr bgcolor="cyan">
			<th align="center">NO</th>
			<th align="center">ID Pegawai</th>
			<th align="center">Nama Pegawai</th>
			<th align="center">Alamat Pegawai</th>
			<th align="center">No Telp</th>
			<th align="center">Email</th>
			<th align="center">ID jabatan</th>
			<th align="center">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_pegawai']; ?></td>
				<td><?php echo $d['nama_pegawai']; ?></td>
				<td><?php echo $d['alamat_pegawai']; ?></td>
				<td><?php echo $d['no_telppegawai']; ?></td>
				<td><?php echo $d['emailPegawai']; ?></td>
				<td><?php echo $d['ID_jabatan']; ?></td>
				<td>
					<a href="editpeg.php?id_pegawai=<?php echo $d['id_pegawai'] ?>" class="tombol1">EDIT</a>
					<a href="hapuspeg.php?id_pegawai=<?php echo $d['id_pegawai'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="tombol2">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</div>