<div class="halaman">
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body>
 
	<h1>Input Data Penggajian</h1>
	<link rel="stylesheet" type="text/css" href="style.css">
	<br/>
	<a href="index.php" class='tombol'>Kembali</a><br><br>
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
	<form method="POST" action="">
		<table border="5" cellpadding="3" cellspacing="3" align="center">
			<tr>			
				<td>ID Penggajian</td>
				<td>:</td>
				<td><input type="text" name="ID_penggajian" required="required" value="<?php echo $kodegj ?>" readonly="readonly"></td>
			</tr>
			<tr>			
				<td>Nama Pegawai</td>
				<td>:</td>
				<td><select type="text" name="id_pegawai">
					<?php
					$ambil = mysqli_query($koneksi, "SELECT * FROM pegawai");
					while($data2 = mysqli_fetch_assoc($ambil)){
						echo '<option value="'.$data2['id_pegawai'].'">'.$data2['nama_pegawai'].'</option>';
					}
					?>
				</select><br></td>
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
				<td><hidden type="date" name="tgl_gaji"><?php
echo date('d-m-Y');
?></td>
			</tr>
			<tr>			
				<td>Besar Gaji</td>
				<td>:</td>
				<td><input type="float" name="besargaji" placeholder="......." required></td>
			</tr>

			<tr>
				<td>Tambah Gaji</td>
				<td>:</td>
				<td><input type="float" name="tambah_gaji" placeholder="......." required></td>
			</tr>

			<tr>
				<td>Jenis Bonus</td>
				<td>:</td>
				<td><input type="text" name="jenisbonus" placeholder="......." required></td>
			</tr>
			<tr>			
				<td>Total Gaji</td>
				<td>:</td>
				<td><input type="float" name="totalgaji" placeholder="......." required></td>
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
		$insert = mysqli_query($koneksi, "INSERT INTO penggajian VALUES
					('".$_POST['ID_penggajian']."',
					'".$_POST['id_pegawai']."',
					'".$_POST['ID_pengguna']."',
					'".$_POST['ID_penjadwalan']."',
					'".$_POST['tgl_gaji']."',
					'".$_POST['besargaji']."',
					'".$_POST['tambah_gaji']."',
					'".$_POST['jenisbonus']."',
					'".$_POST['totalgaji']."')");
		if ($insert) {
				 echo "<script>alert('Data berhasil disimpan');window.location='index.php'</script>";
		}else {
				echo "<script>alert('Data gagal disimpan')</script>";
		}
	}
	?>
	<br/>
	
</body>
</html>
</div>
