<?php
include 'koneksi.php';
if (isset($_GET['ID_penggajian'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM penggajian WHERE ID_penggajian= '".$_GET['ID_penggajian']."' ");
    header('location:index.php');
}