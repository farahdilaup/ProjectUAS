<?php
include 'koneksi.php';
if (isset($_GET['ID_pengguna'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM pengguna WHERE ID_pengguna= '".$_GET['ID_pengguna']."' ");
    header('location:index.php');
}