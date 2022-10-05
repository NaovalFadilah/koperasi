<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $id_transaksi = $_POST ['id_transaksi'];
        $nama_pembeli = $_POST ['nama_pembeli'];
        $alamat = $_POST ['alamat'];
        $no_telepon = $_POST ['no_telepon'];
        $id_barang = $_POST ['id_barang'];

        $sql = "UPDATE `transaksi` SET `id_transaksi`='$id_transaksi',`nama_pembeli`='$nama_pembeli',`alamat`='$alamat',`no_telepon`='$no_telepon',`id_barang`='$id_barang' WHERE id_transaksi='$id_transaksi'";

        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: tampildatapemasukan.php');
        }else{
            header('Location: edit-pemasukan.php?status=gagal');
        }
    }
?>