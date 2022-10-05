<?php
 include 'koneksi.php';

 $id_transaksi = $_GET['id_transaksi'];
 $sql = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
 $query = mysqli_query($connect, $sql);
 $pel = mysqli_fetch_assoc($query);

 if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambahdatauser</title>
    <!-- css -->
    <link rel="stylesheet" href="tambahdatatabungan.css">

    <!-- font goole -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Quicksand:wght@600;700&display=swap" rel="stylesheet">
    <!--Icon-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
    <!--Navbar-->
<body>
    <div class="container">
        <div class="navbar">
          <img src="assets/tb.png" alt="eror"> <p>KOPERASI SMK TARUNA BHAKTI DEPOK</p>
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
    </div>
    <div class="container-2">
        <form action="edit-pemasukan.php" method="POST">
            <div class="tambah-berita">
                <h3>Edit Data Pemasukan</h3>
            </div>
            <div class="data1">
                <label>ID Transaksi</label>
                <input  value="<?php echo $pel ['id_transaksi']?>" required="required" type="number" name="id_transaksi">
            <div class="data2">
                <label>Nama Pembeli</label>
               <input value="<?php echo $pel ['nama_pembeli']?>" required="required" type="text" name="nama_pembeli">
            </div>
            <div class="data3">
                <label>Alamat</label>
                <input value="<?php echo $pel ['alamat']?>" required="required" type="text" name="alamat">
            </div>
            <div class="data4">
                <label>No Telepon</label>
                <input value="<?php echo $pel ['no_telepon']?>" required="required" type="number" name="no_telepon">
            </div>
            <div class="data4">
                <label>ID Barang</label>
                <input value="<?php echo $pel ['id_barang']?>" required="required" type="number" name="id_barang">
            </div>
            <div class="simpan-berita">
                <input type="submit" name="simpan" value="simpan">
            </div>
        </form>
        </div>

</body>
</html>