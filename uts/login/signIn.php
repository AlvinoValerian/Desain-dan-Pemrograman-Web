<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/style.css">
    <title>-LOGIN-</title>
</head>

<body>
    <?php
    include("../koneksi/koneksi.php");
    ?>

    <div class="wrapper">
        <form action="" method="POST">
            <h2>Login</h2>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit" class="submit-login" name="submit" value="submit">Login</button>
            <div class="loginUp">
                <p>Belum ada akun?<a href="SignUp.php"> Sign Up</a></p>

            </div>

        </form>

    </div>

    <?php
    require '../koneksi/koneksi.php';
    
    if (isset($_POST['submit'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM Users WHERE username ='$username' AND password = '$password' ";
        $result = $conn->query($query);
        $data = $result->fetch();

        if (empty($data)) {
            echo"<script>alert('username atau kata sandi salah')</script>";
        } else {
            header("location:../dasboard/dasboard.html");
        }
        
    }

    ?>

</body>

</html>