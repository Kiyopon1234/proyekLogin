<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header("Location: index.php"); // Arahkan ke halaman login jika bukan user biasa
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?> (User)</h2>
    <p>Ini adalah halaman dashboard untuk user.</p>

    <!-- Contoh konten dashboard user -->
    <ul>
        <li><a href="view_profile.php">Lihat Profil</a></li>
        <li><a href="view_orders.php">Lihat Pesanan</a></li>
        <li><a href="user_settings.php">Pengaturan Akun</a></li>
    </ul>

    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>
</body>
</html>
