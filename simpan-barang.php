<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_barang = $_POST ['id_barang'];
    $nama_barang = $_POST ['nama_barang'];
    $harga_barang = $_POST ['harga_barang'];
    $stok_barang = $_POST ['stok_barang'];

    $sql="INSERT INTO `data_barang`(`id_barang`, `nama_barang`, `harga_barang`, `stok_barang`) 
    VALUES ('$id_barang','$nama_barang','$harga_barang','$stok_barang')";

    $query=mysqli_query($connect, $sql);

    if($query){
        header('Location: tampildatabarang.php');
    }else{
        header('Location: simpan-barang.php?status=gagal');
    }
}
?>