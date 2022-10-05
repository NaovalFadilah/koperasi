<?php
    include 'koneksi.php';

    $id_transaksi =$_GET['id_transaksi'];

    $sql="DELETE FROM `transaksi` WHERE id_transaksi='$id_transaksi'";
    $query= mysqli_query($connect, $sql);

    if($query){
        header('Location: tampildatapemasukan.php');
    }else{
        header('location: hapus-pemasukan.php?status=gagal');
    }
?>