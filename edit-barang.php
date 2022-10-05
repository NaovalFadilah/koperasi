<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $id_barang = $_POST ['id_barang'];
        $nama_barang = $_POST ['nama_barang'];
        $harga_barang = $_POST ['harga_barang'];
        $stok_barang = $_POST ['stok_barang'];

        $sql = "UPDATE `data_barang` SET `id_barang`='$id_barang',`nama_barang`='$nama_barang',`harga_barang`='$harga_barang',`stok_barang`='$stok_barang' WHERE id_barang='$id_barang'";

        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampildatabarang.php');
        }else{
            header('Location: edit-barang.php?status=gagal');
        }
    }
?>