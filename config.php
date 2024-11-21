<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "user"; // Pastikan nama database sama dengan yang telah Anda buat

// Buat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>