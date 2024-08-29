<div class="halaman">
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body>
 
	<h1>Input Data Jadwal Pemberangkatan</h1>
	<link rel="stylesheet" type="text/css" href="style.css">
	<br/>
	<a href="index.php" class='tombol'>Kembali</a><br><br>
	
	<form method="POST" action="">
		<table border="5" cellpadding="3" cellspacing="3" align="center">
			<tr>			
				<td>Id Penjadwalan</td>
				<td>:</td>
				<td><input type="text" name="ID_penjadwalan" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Asal perusahaan</td>
				<td>:</td>
				<td><input type="text" name="asal_perusahaan" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>jumlah sopir</td>
				<td>:</td>
				<td><input type="text" name="sopir_yg_dibutuhkan" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Tanggal Berangkat</td>
				<td>:</td>
				<td><input type="date" name="tgl_berangkat"  required></td>
			</tr>
			<tr>			
				<td>Waktu Berangkat</td>
				<td>:</td>
				<td><input type="time" name="wkt_berangkat" required></td>
			</tr>
			<tr>			
				<td>Tempat tujuan</td>
				<td>:</td>
				<td><input type="text" name="nama_tempat_tujuan" placeholder="......." required></td>
			</tr>

			<tr>
				<td>Alamat Tujuan</td>
				<td>:</td>
				<td><input type="text" name="alamat_tujuan" placeholder="......." required></td>
			</tr>

			<tr>
				<td>ID Kota</td>
				<td>:</td>
				<td><input type="text" name="ID_KOTA" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>ID Penyewaan</td>
				<td>:</td>
				<td><input type="text" name="no_penyewaan" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>ID Pengguna</td>
				<td>:</td>
				<td><input type="text" name="ID_pengguna" placeholder="......." required></td>
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
		$insert = mysqli_query($koneksi, "INSERT INTO jadwal_pemberangkatan VALUES
					('".$_POST['ID_penjadwalan']."',
					'".$_POST['asal_perusahaan']."',
					'".$_POST['sopir_yg_dibutuhkan']."',
					'".$_POST['tgl_berangkat']."',
					'".$_POST['wkt_berangkat']."',
					'".$_POST['nama_tempat_tujuan']."',
					'".$_POST['alamat_tujuan']."',
					'".$_POST['ID_KOTA']."',
					'".$_POST['no_penyewaan']."',
					'".$_POST['ID_pengguna']."')");
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