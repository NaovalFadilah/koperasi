<?php
    include 'koneksi.php';

    $Id_barang = $_GET['id_barang'];

    $sql = "DELETE FROM `data_barang` WHERE data_barang.id_barang = '$id_barang'";

    $query = mysqli_query($connect, $sql);
        
    if($query){
        header('Location: tampilandatabarang.php');
    }else{
        header('Location: tampilandatabarang.php?status=gagal');
    }

?>