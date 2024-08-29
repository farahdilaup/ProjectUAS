<!DOCTYPE html>
<html>
<head>
	<title>Project UAS Pemograman Basis Data</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">Proses Penggajian SISTEM INFORMASI Penyewaan Truck</h1>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=penggajian">Penggajian</a></li>
			<li><a href="index.php?page=pegawai">Pegawai</a></li>
			<li><a href="index.php?page=pengguna">Pengguna</a></li>
			<!--<li><a href="index.php?page=jadwal">Jadwal Pemberangkatan</a></li>
			-->
			<li><a href="index.php?page=jabatan">Jabatan</a></li>
			<li><a href="index.php?page=gaji">Riwayat Penggajian</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'penggajian':
				include "penggajian.php";
				break;
			case 'pengguna':
				include "pengguna.php";
				break;
			case 'pegawai':
				include "pegawai.php";
				break;	
			case 'jadwal':
				include "jadwal.php";
				break;	
			case 'jabatan':
				include "jabatan.php";
				break;	
			case 'gaji':
				include "gaji.php";
				break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>