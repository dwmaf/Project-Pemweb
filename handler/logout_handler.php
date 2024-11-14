<?php
// Memulai atau melanjutkan sesi yang ada
session_start();
// Menghapus semua data sesi
session_unset();
// Menghancurkan sesi
session_destroy();
// Redirect ke halaman login atau halaman utama setelah logout
echo "Logout berhasil!";
header("Location: ../index.php");
exit();
?>
