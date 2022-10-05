<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_transaksi = $_POST ['id_transaksi'];
    $nama_pembeli = $_POST ['nama_pembeli'];
    $alamat = $_POST ['alamat'];
    $no_telepon = $_POST ['no_telepon'];
    $id_barang = $_POST ['id_barang'];

    $sql="INSERT INTO `transaksi`(`id_transaksi`, `nama_pembeli`, `alamat`, `no_telepon`, `id_barang`) 
    VALUES ('$id_transaksi','$nama_pembeli','$alamat','$no_telepon','$id_barang')";

    $query=mysqli_query($connect, $sql);

    if($query){
        header('Location: tampildatapermasukan.php');
    }else{
        header('Location: simpan-pemasukan.php?status=gagal');
    }
}
?>