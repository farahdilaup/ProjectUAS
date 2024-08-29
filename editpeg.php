<?php
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE id_pegawai = '".$_GET['id_pegawai']."'");
$result = mysqli_fetch_array($data_edit);
?>
<div class="halaman">
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
 
    <h2>Edit Data Pegawai</h2>
    <link rel="stylesheet" type="text/css" href="style.css">
    <br/>
    <a href="index.php" class='tombol'>Kembali</a><br><br>
    
    <form method="POST" action="">
        <table border="5" cellpadding="3" cellspacing="3" align="center">
            <tr>            
                <td>Id Pegawai</td>
                <td>:</td>
                <td><input type="text" name="id_pegawai" value="<?php echo $result['id_pegawai'] ?>" required readonly="readonly"></td>
            </tr>
            <tr>            
                <td>Nama Pegawai</td>
                <td>:</td>
                <td><input type="text" name="nama_pegawai" value="<?php echo $result['nama_pegawai'] ?>" required></td>
            </tr>
            <tr>            
                <td>Alamat Pegawai</td>
                <td>:</td>
                <td><input type="text" name="alamat_pegawai" value="<?php echo $result['alamat_pegawai'] ?>" required></td>
            </tr>
            <tr>            
                <td>No telp</td>
                <td>:</td>
                <td><input type="text" name="no_telppegawai" value="<?php echo $result['no_telppegawai'] ?>" required></td>
            </tr>
            <tr>            
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="emailPegawai" value="<?php echo $result['emailPegawai'] ?>" required></td>
            </tr>
            <tr>            
                <td>Nama jabatan</td>
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
                <td><div class="submit">
                        <input type="submit" name="edit" value="Simpan" style="padding: 0.4% 0.8%;background-color:Green;color: #fff;border-radius: 2px;text-decoration-line: none"></td>
            </tr>   
    </form>
    <?php
    
    if(isset($_POST['edit'])) {
        $update = mysqli_query($koneksi, "UPDATE pegawai SET 
            id_pegawai = '".$_POST['id_pegawai']."',
            nama_pegawai = '".$_POST['nama_pegawai']."',
            alamat_pegawai = '".$_POST['alamat_pegawai']."',
            no_telppegawai = '".$_POST['no_telppegawai']."',
            emailPegawai = '".$_POST['emailPegawai']."',
            ID_jabatan = '".$_POST['ID_jabatan']."'
            WHERE id_pegawai = '".$_GET['id_pegawai']."'");
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