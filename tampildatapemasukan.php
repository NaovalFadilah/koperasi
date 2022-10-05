<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="styledatabarang.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">
    <!--Icon-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--Navbar-->
    <div class="container">
        <div class="navbar">
          <img src="logo.png" alt=""><p>KOPERASI SMK TARUNA BHAKTI DEPOK</p>
        </div>
    </div>

    <!-- Side bar -->
    <div class="sidebar">
        <ul>
            <a href=""><p > <i class="fa-solid fa-house"></i>Dasboard</p></a>  
            <a href=""><p><i class="fa-solid fa-user"></i>Admin</p> </a>
            <a href="tampildatapemasukan.php"><p><i class="fa-solid fa-box"></i>Data Pemasukan</p></a>
            <a href="tampildatabarang.php"><p><i class="fa-solid fa-database"></i>Data Barang</p></a>
        </ul>
    </div>

    <!-- Table -->
    <div class="databarang">
        <h2>DATA BARANG</h2>
        <button class="create"><a href="data-pemasukan.html" style="color: white; text-decoration: none;">Tambah Data</a></button>
        <table class="tabeldata">
            <tr>
                <th class="thb1">ID Transaksi</th>
                <th class="thb2">Nama Pembeli</th>
                <th class="thb3">Alamat</th>
                <th class="thb4">No Telepon</th>
                <th class="thb4">ID Barang</th>
                <th class="thb5">Aksi</th>
            </tr>
            <?php
                $sql = "SELECT * FROM data_barang";
                $query = mysqli_query($connect, $sql);
                while($pel = mysqli_fetch_array($query)){
                    echo "
                    <tr>
                    <td>$pel[id_transaksi]</td>
                    <td>$pel[nama_pembeli]</td>
                    <td>$pel[alamat]</td>
                    <td>$pel[no_telepon]</td>
                    <td>$pel[id_barang]</td>
                    <td>
                        <a href='form-edit-pemasukan.php?id_barang=".$pel['id_transaksi']."' class =\"barangupdate\">Update</a>
                        <a href='hapus-pemasukan.php?id_barang=".$pel['id_transaksi']."' class =\"baranghapus\">Hapus</a>
                    </td>
                </tr>";

                }
            ?>
        </table>
    </div>
</body>
</html>