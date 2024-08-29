<?php
include 'koneksi.php';
if (isset($_GET['ID_jabatan'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM jabatan WHERE ID_jabatan= '".$_GET['ID_jabatan']."' ");
    header('location:index.php');
}