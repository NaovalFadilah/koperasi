<?php
include 'koneksi.php';

if(isset($_POST['username'])){
    $username = $_POST ['username'];
    $pasword = $_POST ['pasword'];

    $query=mysqli_query($connect, $sql);

}
?>