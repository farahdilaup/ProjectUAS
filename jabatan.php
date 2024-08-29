<div class="halaman">
	<!DOCTYPE html>
<html>
<head>
	<title>Project UAS Pemograman Basis Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1 align=center>Tabel Data Jabatan</h1>
	<br/>
	<a href="tambahjb.php" class='tombol'>Tambah Jabatan</a>
	<br/>
	<?php
	include 'koneksi.php';
	$query = mysqli_query($koneksi, "SELECT max(ID_jabatan) as kodeTerbesar FROM jabatan");
	$data = mysqli_fetch_array($query);
	$kodejb = $data['kodeTerbesar'];
	$urutan = (int) substr($kodejb, 3, 3);
	$urutan++;
	$huruf = "JBT";
	$kodejb = $huruf . sprintf("%03s", $urutan);
	?>
	<br/>
	<br/>
	<table  border="5" cellpadding="3" cellspacing="3" align="center">
		<tr bgcolor="cyan">
			<th align="center">NO</th>
			<th align="center">ID Jabatan</th>
			<th align="center">Nama Jabatan</th>
			<th align="center">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from jabatan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['ID_jabatan']; ?></td>
				<td><?php echo $d['Nama_jabatan']; ?></td>
				<td>
					<a href="editjb.php?ID_jabatan=<?php echo $d['ID_jabatan'] ?>" class="tombol1">EDIT</a>
					<a href="hapusjb.php?ID_jabatan=<?php echo $d['ID_jabatan'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="tombol2">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</div>