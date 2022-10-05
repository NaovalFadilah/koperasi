<?php
    include 'koneksi.php';

    session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM login_admin WHERE username='$username' AND pasword='$pasword'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: tampildatauser.php");
            } else {
                echo "<script>alert('Tidak Sama. Coba Lagi')</script>";
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
     <div class="login-form-2">
        <h3>LOGIN</h3>
        <form>
            <div class="email">
                 <input type="text" class="emailfill" placeholder="Your Username *" value="" name="username">
            </div>
            <div class="password">
                <input type="password" class="passwordfill" placeholder="Your Password *" value="" name="password">
            </div>
            <div class="submit">
                <button class="btnSubmit"><a href="dashboard.php" style="color: #004c9c; text-decoration: none;">Login</a></button>
            </div>
            <div class="forget">
                <a href="#" class="forgetPwd" value="Login">Forget Password?</a>
            </div>
            <div class="suggestion">
                <p>Don't have an account?</p><a href="Regeistrasi.php" class="registration" value="Login"><u>Register Here.</u></a>
            </div>
        </form>
    </div>
</body>
</html>