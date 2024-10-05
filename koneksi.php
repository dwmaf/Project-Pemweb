<?php
$servername = "localhost";  // atau IP server MySQL
$username = "root";     // nama pengguna MySQL
$password = "23ni";     // kata sandi pengguna MySQL
$dbname = "pemweb";  // nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>
