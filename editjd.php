<?php
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM jadwal_pemberangkatan WHERE ID_penjadwalan = '".$_GET['ID_penjadwalan']."'");
$result = mysqli_fetch_array($data_edit);
?>
<div class="halaman">
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
 
    <h2>Edit Data Penjadwalan</h2>
    <link rel="stylesheet" type="text/css" href="style.css">
	<br/>
	<a href="index.php" class='tombol'>Kembali</a><br><br>
	
	<form method="POST" action="">
		<table border="5" cellpadding="3" cellspacing="3" align="center">
			<tr>			
				<td>Id Penjadwalan</td>
				<td>:</td>
				<td><input type="text" name="id_pengguna" value="<?php echo $result['ID_penjadwalan'] ?>" required></td>
			</tr>
			<tr>			
				<td>Asal Perusahaan</td>
				<td>:</td>
				<td><input type="text" name="asal_psh" value="<?php echo $result['asal_perusahaan'] ?>" required></td>
			</tr>
			<tr>			
				<td>Jumlah Sopir</td>
				<td>:</td>
				<td><input type="integer" name="jml_sopir" value="<?php echo $result['sopir_yg_dibutuhkan'] ?>" required></td>
			</tr>
			<tr>			
				<td>Tanggal Berangkat</td>
				<td>:</td>
				<td><input type="date" name="tgl_berangkat" value="<?php echo $result['tgl_berangkat'] ?>" required></td>
			</tr>
			<tr>			
				<td>Waktu Berangkat</td>
				<td>:</td>
				<td><input type="time" name="waktu" value="<?php echo $result['wkt_berangkat'] ?>" required></td>
			</tr>

			<tr>
				<td>Nama Tempat Tujuan</td>
				<td>:</td>
				<td><input type="text" name="tmp_tujuan" value="<?php echo $result['nama_tempat_tujuan'] ?>" required></td>
			</tr>
			<tr>
				<td>Alamat Tujuan</td>
				<td>:</td>
				<td><input type="text" name="alamat_tujuan" value="<?php echo $result['alamat_tujuan'] ?>" required></td>
			</tr>
			<tr>
				<td>Id Kota</td>
				<td>:</td>
				<td><input type="text" name="id_kota" value="<?php echo $result['ID_KOTA'] ?>" required></td>
			</tr>
			<tr>
				<td>No Penyewaan</td>
				<td>:</td>
				<td><input type="text" name="no_sewa" value="<?php echo $result['no_penyewaan'] ?>" required></td>
			</tr>
			<tr>
				<td>Id Pengguna</td>
				<td>:</td>
				<td><input type="text" name="id_pgn" value="<?php echo $result['ID_pengguna'] ?>" required></td>
			</tr>
			</table>
			<br/>
			<br/>
			<tr>
				<td></td>
				<td></td>
				<td><div class="submit">
						<input type="submit" name="edit" value="Simpan" style="padding: 0.4% 0.8%;background-color:Green;color: #fff;border-radius: 2px;text-decoration-line: none"></td>
			</tr>	
	</form>
	<?php
	
	if(isset($_POST['edit'])) {
		$update = mysqli_query($koneksi, "UPDATE jadwal_pemberangkatan SET 
			asal_perusahaan = '".$_POST['asal_psh']."',
			sopir_yg_dibutuhkan = '".$_POST['jml_sopir']."',
			tgl_berangkat = '".$_POST['tgl_berangkat']."',
			wkt_berangkat = '".$_POST['waktu']."',
			nama_tempat_tujuan = '".$_POST['tmp_tujuan']."',
			alamat_tujuan = '".$_POST['alamat_tujuan']."',
			ID_KOTA = '".$_POST['id_kota']."',
			no_penyewaan = '".$_POST['no_sewa']."',
			ID_pengguna = '".$_POST['id_pgn']."'
			WHERE ID_penjadwalan = '".$_GET['ID_penjadwalan']."'");
		if($update) {
			echo "<script>alert('Data berhasil di ubah');window.location='index.php'</script>";
		}else {
			echo "<script>alert('Data gagal di ubah')</script>";
		}
		
	}
	?>
	
	</header>
</body>
</html>
</div>