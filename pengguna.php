<div class="halaman">
	<!DOCTYPE html>
<html>
<head>
	<title>Project UAS Pemograman Basis Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1 align=center>Tabel Data Pengguna</h1>
	<br/>
	<a href="tambahgn.php" class='tombol'>Tambah Pengguna</a>
	<br/>
	<?php
	include 'koneksi.php';
	$query = mysqli_query($koneksi, "SELECT max(ID_pengguna) as kodeTerbesar FROM pengguna");
	$data = mysqli_fetch_array($query);
	$kodepn = $data['kodeTerbesar'];
	$urutan = (int) substr($kodepn, 3, 3);
	$urutan++;
	$huruf = "PGN";
	$kodepn = $huruf . sprintf("%03s", $urutan);
	?>
	<br/>
	<br/>
	<table  border="5" cellpadding="3" cellspacing="3" align="center">
		<tr bgcolor="cyan">
			<th align="center">NO</th>
			<th align="center">ID Pengguna</th>
			<th align="center">Asal Perusahaan</th>
			<th align="center">Nama Pengguna</th>
			<th align="center">Alamat</th>
			<th align="center">No Telp</th>
			<th align="center">Username</th>
			<th align="center">Password</th>
			<th align="center">Session</th>
			<th align="center">Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pengguna");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['ID_pengguna']; ?></td>
				<td><?php echo $d['Asalperusahaan']; ?></td>
				<td><?php echo $d['Nama_pengguna']; ?></td>
				<td><?php echo $d['Alamat_pengguna']; ?></td>
				<td><?php echo $d['notelp']; ?></td>
				<td><?php echo $d['Username_pengguna']; ?></td>
				<td><?php echo $d['Password_pengguna']; ?></td>
				<td><?php echo $d['session_']; ?></td>
				<td>
					<a href="editgn.php?ID_pengguna=<?php echo $d['ID_pengguna'] ?>" class="tombol1">EDIT</a>
					<a href="hapusgn.php?ID_pengguna=<?php echo $d['ID_pengguna'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="tombol2">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
</div>