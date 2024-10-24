<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="wrapper">
        <form action="SignUp.php" method="POST">
            <h2>Sign Up</h2>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            
            <button type="submit" class="submit-login" name="submit" value="submit">Sign Up</button>
            <div class="loginUp">
                <p>Sudah ada akun? <a href="signIn.php"> Login</a></p>
            </div>

        </form>

    </div>

    <?php 
require '../koneksi/koneksi.php';

try {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Cek apakah email atau username sudah terdaftar
        $checkQuery = $conn->prepare("SELECT * FROM Users WHERE email = ? OR username = ?");
        $checkQuery->execute([$email, $username]);
        $userExists = $checkQuery->fetch();

        if ($userExists) {
            // Jika email atau username sudah ada, tampilkan pesan error
            echo "<script>alert('Username atau Email sudah terdaftar, gunakan yang lain.')</script>";
            header("Location: ../login/SignUp.php");
            exit();
        } else {
            // Jika tidak ada duplikasi, lakukan pendaftaran
            $query = "INSERT INTO Users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->execute([$username, $email, $password]);

            echo "<script>alert('Kamu berhasil register')</script>";
            header("location:../login/signIn.php");
            exit();
        }
    }
} catch (PDOException $e) {
    // Tangkap error PDO dan tampilkan pesan yang lebih ramah
    echo "<script>alert('Terjadi kesalahan saat melakukan registrasi: " . $e->getMessage() . "')</script>";
    header("Location: ../login/SignUp.php");
    exit();
}
?>

</body>
</html>