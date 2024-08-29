<?php
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE ID_pengguna = '".$_GET['ID_pengguna']."'");
$result = mysqli_fetch_array($data_edit);
?>
<div class="halaman">
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
 
    <h2>Edit Data Pengguna</h2>
    <link rel="stylesheet" type="text/css" href="style.css">
    <br/>
    <a href="index.php" class='tombol'>Kembali</a><br><br>
    
    <form method="POST" action="">
        <table border="5" cellpadding="3" cellspacing="3" align="center">
            <tr>            
                <td>ID Pengguna</td>
                <td>:</td>
                <td><input type="text" name="ID_pengguna" value="<?php echo $result['ID_pengguna'] ?>" required readonly="readonly"></td>
            </tr>
            <tr>            
                <td>Asal perusahaan</td>
                <td>:</td>
                <td><input type="text" name="Asalperusahaan" value="<?php echo $result['Asalperusahaan'] ?>" required></td>
            </tr>
            <tr>            
                <td>Nama Pengguna</td>
                <td>:</td>
                <td><input type="text" name="Nama_pengguna" value="<?php echo $result['Nama_pengguna'] ?>" required></td>
            </tr>
            <tr>            
                <td>Alamat Pengguna</td>
                <td>:</td>
                <td><input type="text" name="Alamat_pengguna" value="<?php echo $result['Alamat_pengguna'] ?>" required></td>
            </tr>
            <tr>            
                <td>No telp</td>
                <td>:</td>
                <td><input type="text" name="notelp" value="<?php echo $result['notelp'] ?>" required></td>
            </tr>
            <tr>            
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="Username_pengguna" value="<?php echo $result['Username_pengguna'] ?>" required></td>
            </tr>

            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="Password_pengguna" value="<?php echo $result['Password_pengguna'] ?>" required></td>
            </tr>

            <tr>
                <td>Session</td>
                <td>:</td>
                <td><input type="text" name="session_" value="<?php echo $result['session_'] ?>" required></td>
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
        $update = mysqli_query($koneksi, "UPDATE pengguna SET 
            ID_pengguna = '".$_POST['ID_pengguna']."',
            Asalperusahaan = '".$_POST['Asalperusahaan']."',
            Nama_pengguna = '".$_POST['Nama_pengguna']."',
            Alamat_pengguna = '".$_POST['Alamat_pengguna']."',
            notelp = '".$_POST['notelp']."',
            Username_pengguna = '".$_POST['Username_pengguna']."',
            Password_pengguna = '".$_POST['Password_pengguna']."',
            session_ = '".$_POST['session_']."'
            WHERE ID_pengguna = '".$_GET['ID_pengguna']."'");
        if($update) {
            echo "<script>alert('Data berhasil di ubah');window.location='index.php'</script>";
        }else {
            echo "<script>alert('Data gagal di ubah')</script>";
        }
        
    }
    ?>
</body>
</html>
</div>