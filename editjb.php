<?php
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM jabatan WHERE ID_jabatan = '".$_GET['ID_jabatan']."'");
$result = mysqli_fetch_array($data_edit);
?>
<div class="halaman">
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Edit Data</title>
</head>
<body>
 
    <h2>Edit Data Jabatan</h2>
    <link rel="stylesheet" type="text/css" href="style.css">
    <br/>
    <a href="index.php" class='tombol'>Kembali</a><br><br>
    
    <form method="POST" action="">
        <table border="5" cellpadding="3" cellspacing="3" align="center">
            <tr>            
                <td>ID jabatan</td>
                <td>:</td>
                <td><input type="text" name="ID_jabatan" value="<?php echo $result['ID_jabatan'] ?>" required readonly="readonly"></td>
            </tr>
            <tr>            
                <td>Nama jabatan</td>
                <td>:</td>
                <td><input type="text" name="Nama_jabatan" value="<?php echo $result['Nama_jabatan'] ?>" required></td>
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
        $update = mysqli_query($koneksi, "UPDATE jabatan SET 
            ID_jabatan = '".$_POST['ID_jabatan']."',
            Nama_jabatan = '".$_POST['Nama_jabatan']."'
            WHERE ID_jabatan = '".$_GET['ID_jabatan']."'");
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