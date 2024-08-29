<?php
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM penggajian WHERE ID_penggajian = '".$_GET['ID_penggajian']."'");
$result = mysqli_fetch_array($data_edit);
?>
<div class="halaman">
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data</title>
</head>
<body>
 
	<h2>Edit Data Penggajian</h2>
	<link rel="stylesheet" type="text/css" href="style.css">
	<br/>
	<a href="index.php" class='tombol'>Kembali</a><br><br>
	
	<form method="POST" action="">
		<table border="5" cellpadding="3" cellspacing="3" align="center">
			<tr>			
				<td>Id Penggajian</td>
				<td>:</td>
				<td><input type="text" name="id_gaji" value="<?php echo $result['ID_penggajian'] ?>" required readonly="readonly"></td>
			</tr>
			<tr>			
				<td>Nama Pegawai</td>
				<td>:</td>
				<td> <select type="text" name="id_pegawai">
					<?php
					$ambil = mysqli_query($koneksi, "SELECT * FROM pegawai");
					while($data2 = mysqli_fetch_assoc($ambil)){
						echo '<option value="'.$data2['id_pegawai'].'">'.$data2['nama_pegawai'].'</option>';
					}
					?>
				</select><br>
			</td>
			</tr>
			<tr>			
				<td>Nama Pengguna</td>
				<td>:</td>
				<td><select type="text" name="ID_pengguna">
					<?php
					$ambil = mysqli_query($koneksi, "SELECT * FROM Pengguna");
					while($data2 = mysqli_fetch_assoc($ambil)){
						echo '<option value="'.$data2['ID_pengguna'].'">'.$data2['Nama_pengguna'].'</option>';
					}
					?>
				</select><br></td>
			</tr>
			<tr>			
				<td>Nama Perusahaan</td>
				<td>:</td>
				<td><select type="text" name="ID_penjadwalan">
					<?php
					$ambil = mysqli_query($koneksi, "SELECT * FROM jadwal_pemberangkatan");
					while($data2 = mysqli_fetch_assoc($ambil)){
						echo '<option value="'.$data2['ID_penjadwalan'].'">'.$data2['asal_perusahaan'].'</option>';
					}
					?>
				</select><br></td>
			</tr>
			<tr>			
				<td>Tanggal Penggajian</td>
				<td>:</td>
				<td><hidden type="date" name="TanggalPenggajian"><?php
echo date('d-m-Y');
?></td>
			</tr>
			<tr>			
				<td>Besar Gaji</td>
				<td>:</td>
				<td><input type="float" name="besargaji" value="<?php echo $result['BesarGaji'] ?>" required></td>
			</tr>

			<tr>
				<td>Tambah Gaji</td>
				<td>:</td>
				<td><input type="float" name="tambah_gaji" value="<?php echo $result['TambahGaji'] ?>" required></td>
			</tr>

			<tr>
				<td>Jenis Bonus</td>
				<td>:</td>
				<td><input type="text" name="jenisbonus" value="<?php echo $result['Jenisbonus'] ?>" required></td>
			</tr>
			<tr>			
				<td>Total Gaji</td>
				<td>:</td>
				<td><input type="float" name="totalgaji" value="<?php echo $result['TotalGaji'] ?>" required></td>
			</tr>
			</table>
			<br/>
			<br/>
			<tr>
				<td></td>
				<td></td>
				<td>
					<div class="submit">
						<input type="submit" name="edit" value="Simpan" style="padding: 0.4% 0.8%;background-color:Green;color: #fff;border-radius: 2px;text-decoration-line: none"></td>

			</tr>	
	</form>
	<?php
	
	if(isset($_POST['edit'])) {
		$update = mysqli_query($koneksi, "UPDATE penggajian SET 
			id_pegawai = '".$_POST['id_pgw']."',
			ID_pengguna = '".$_POST['id_pengguna']."',
			ID_penjadwalan = '".$_POST['id_jadwal']."',
			TanggalPenggajian = '".$_POST['TanggalPenggajian']."',
			BesarGaji = '".$_POST['besargaji']."',
			TambahGaji = '".$_POST['tambah_gaji']."',
			Jenisbonus = '".$_POST['jenisbonus']."',
			TotalGaji = '".$_POST['totalgaji']."'
			WHERE ID_penggajian = '".$_GET['ID_penggajian']."'");
		if($update) {
			echo "<script>alert('Data berhasil di ubah');window.location='index.php'</script>";
		}else {
			echo "<script>alert('Data gagal di ubag')</script>";
		}
		
	}
	?>
</body>
</html>
</div>