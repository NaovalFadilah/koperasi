<?php
    include 'koneksi.php';

    $id_barang =$_GET['id_barang'];

    $sql="DELETE FROM `data_barang` WHERE id_barang='$id_barang'";
    $query= mysqli_query($connect, $sql);

    if($query){
        header('Location: tampildatabarang.php');
    }else{
        header('location: hapus-barang.php?status=gagal');
    }
?>