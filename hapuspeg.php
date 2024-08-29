<?php
include 'koneksi.php';
if (isset($_GET['id_pegawai'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM pegawai WHERE id_pegawai= '".$_GET['id_pegawai']."' ");
    header('location:index.php');
}