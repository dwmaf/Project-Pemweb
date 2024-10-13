<?php
$servername = "localhost";
$username = "root";  
$password = "23ni";  
$dbname = "pemweb";  

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>