<?php
$servername = "localhost";
$username = "root";  
$password = "23ni";  
$dbname = "pemweb";  

// $servername = "sql110.infinityfree.com";
// $username = "if0_37148672";  
// $password = "11Xzy9tC1W";  
// $dbname = "if0_37148672_dwmaf";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
?>