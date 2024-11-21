<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php"); // Arahkan ke halaman login jika bukan admin
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Selamat datang, <?php echo $_SESSION['username']; ?> (Admin)</h2>
    <p>Ini adalah halaman dashboard untuk admin.</p>

    <!-- Contoh konten dashboard admin -->
    <ul>
        <li><a href="manage_users.php">Kelola Pengguna</a></li>
        <li><a href="manage_content.php">Kelola Konten</a></li>
        <li><a href="settings.php">Pengaturan</a></li>
    </ul>

    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>
</body>
</html>
