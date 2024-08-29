<div class="halaman">
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body>
 
	<h1>Input Data Pegawai</h1>
	<link rel="stylesheet" type="text/css" href="style.css">
	<br/>
	<a href="index.php" class='tombol'>Kembali</a><br><br>
		<?php
	include 'koneksi.php';
	$query = mysqli_query($koneksi, "SELECT max(ID_pengguna) as kodeTerbesar FROM pengguna");
	$data = mysqli_fetch_array($query);
	$kodepn = $data['kodeTerbesar'];
	$urutan = (int) substr($kodepn, 3, 4);
	$urutan++;
	$huruf = "PGN";
	$kodepn = $huruf . sprintf("%04s", $urutan);
	?>
	
	<form method="POST" action="">
		<table border="5" cellpadding="3" cellspacing="3" align="center">
			<tr>			
				<td>ID Pengguna</td>
				<td>:</td>
				<td><input type="text" name="ID_pengguna" required="required" value="<?php echo $kodepn ?>" readonly="readonly"></td>
			</tr>
			<tr>			
				<td>Asal perusahaan</td>
				<td>:</td>
				<td><input type="text" name="Asalperusahaan" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Nama Pengguna</td>
				<td>:</td>
				<td><input type="text" name="Nama_pengguna" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Alamat Pengguna</td>
				<td>:</td>
				<td><input type="text" name="Alamat_pengguna" placeholder="......." required></td>
			</tr>
			<tr>
				<td>No telp</td>
				<td>:</td>
				<td><input type="text" name="notelp" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="Username_pengguna" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="Password_pengguna" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Session</td>
				<td>:</td>
				<td><input type="text" name="session_" placeholder="......." required></td>
			</tr>
			</table>
			<br/>
			<br/>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan" style="padding: 0.4% 0.8%;background-color:Green;color: #fff;border-radius: 2px;text-decoration-line: none"></td>
			</tr>	
	</form>
	<?php
	include 'koneksi.php';
	if(isset($_POST['simpan'])) {
		$insert = mysqli_query($koneksi, "INSERT INTO pengguna VALUES
					('".$_POST['ID_pengguna']."',
					'".$_POST['Asalperusahaan']."',
					'".$_POST['Nama_pengguna']."',
					'".$_POST['Alamat_pengguna']."',
					'".$_POST['notelp']."',
					'".$_POST['Username_pengguna']."',
					'".$_POST['Password_pengguna']."',
					'".$_POST['session_']."')");
		if ($insert) {
				 echo "<script>alert('Data berhasil disimpan');window.location='index.php'</script>";
		}else {
				echo "<script>alert('Data gagal disimpan')</script>";
		}
	}
	?>
	<br/>
	<br><br>
</body>
</html>
</div>
