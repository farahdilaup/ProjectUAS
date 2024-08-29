<?php
include 'koneksi.php';
if (isset($_GET['ID_penjadwalan'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM jadwal_pemberangkatan WHERE ID_penjadwalan= '".$_GET['ID_penjadwalan']."' ");
    header('location:index.php');
}