<div class="halaman">
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body>
 
	<h1>Input Data Jabatan</h1>
	<link rel="stylesheet" type="text/css" href="style.css">
	<br/>
	<a href="index.php" class='tombol'>Kembali</a><br><br>
		<?php
	include 'koneksi.php';
	$query = mysqli_query($koneksi, "SELECT max(ID_jabatan) as kodeTerbesar FROM jabatan");
	$data = mysqli_fetch_array($query);
	$kodejb = $data['kodeTerbesar'];
	$urutan = (int) substr($kodejb, 3, 4);
	$urutan++;
	$huruf = "JBT";
	$kodejb = $huruf . sprintf("%04s", $urutan);
	?>
	
	<form method="POST" action="tambahjb.php">
		<table border="5" cellpadding="3" cellspacing="3" align="center">
			<tr>			
				<td>ID jabatan</td>
				<td>:</td>
				<td><input type="text" name="ID_jabatan" required="required" value="<?php echo $kodejb ?>" readonly="readonly"></td>
			</tr>
			<tr>			
				<td>Nama jabatan</td>
				<td>:</td>
				<td><input type="text" name="Nama_jabatan" placeholder="......." required></td>
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
		$insert = mysqli_query($koneksi, "INSERT INTO jabatan VALUES
					('".$_POST['ID_jabatan']."',
					'".$_POST['Nama_jabatan']."')");
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
