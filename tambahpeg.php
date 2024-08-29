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
	$query = mysqli_query($koneksi, "SELECT max(id_pegawai) as kodeTerbesa FROM pegawai");
	$data = mysqli_fetch_array($query);
	$kodepg = $data['kodeTerbesa'];
	$urutn = (int) substr($kodepg, 3, 4);
	$urutn++;
	$huruf = "PGW";
	$kodepg = $huruf . sprintf("%04s", $urutn);
	?>
	 <?php

  require_once 'koneksi.php';

  $query = "SELECT * FROM jabatan ORDER BY ID_jabatan DESC";

  $result = mysqli_query($koneksi, $query);

 ?>
	<form method="POST" action="tambahpeg.php" method="post">
		<table border="5" cellpadding="3" cellspacing="3" align="center">
			<tr>			
				<td>Id Pegawai</td>
				<td>:</td>
				<td><input type="text" name="id_pegawai" required="required" value="<?php echo $kodepg ?>" readonly="readonly"></td>
			</tr>
			<tr>			
				<td>Nama Pegawai</td>
				<td>:</td>
				<td><input type="text" name="nama_pegawai" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Alamat Pegawai</td>
				<td>:</td>
				<td><input type="text" name="alamat_pegawai" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>No telp</td>
				<td>:</td>
				<td><input type="text" name="no_telppegawai" placeholder="......." required></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="emailPegawai" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Nama Jabatan</td>
				<td>:</td>
				<td><select type="text" name="ID_jabatan">
					<?php
					$ambil = mysqli_query($koneksi, "SELECT * FROM jabatan");
					while($data2 = mysqli_fetch_assoc($ambil)){
						echo '<option value="'.$data2['ID_jabatan'].'">'.$data2['Nama_jabatan'].'</option>';
					}
					?>
				</select><br></td>
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
		$insert = mysqli_query($koneksi, "INSERT INTO pegawai VALUES
					('".$_POST['id_pegawai']."',
					'".$_POST['nama_pegawai']."',
					'".$_POST['alamat_pegawai']."',
					'".$_POST['no_telppegawai']."',
					'".$_POST['emailPegawai']."',
					'".$_POST['ID_jabatan']."')");
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
