<?php
    include 'koneksi.php';

    error_reporting(0);

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        if ($password == $cpassword) {
            $sql = "SELECT * FROM login_admin WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO login_admin (username, pasword)
                        VALUES ('$username', '$pasword')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    header('Location: tambahdatauser.html');
                    $username = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                } else {
                    echo "<script>alert('Ada Masalah.')</script>";
                }
            } else {
                echo "<script>alert('Password Tidak Sama. Coba Lagi')</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registrasi.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="registrasi">
        <h3>REGISTER</h3>
        <form action="" method="POST">
            <div class="email">
                 <input type="text" class="emailfill" placeholder="Your Username *" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="password">
                <input type="password" class="passwordfill" placeholder="Your Password *" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="confirm">
                <input type="password" class="passwordconfirm" placeholder="Confirm Password *" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="submit">
                <button class="btnSubmit"><a href="tambahdatauser.html" style="color: #004c9c; text-decoration: none;">Register</a></button>
            </div>
        </form>
    </div>
</body>
</html>