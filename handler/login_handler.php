<?php
include '../db/koneksi.php';
// Mengecek apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Mengambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mencari pengguna berdasarkan email
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Memeriksa apakah pengguna ditemukan
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Memeriksa apakah password cocok
        if (password_verify($password, $user['password'])) {
            // Menyimpan informasi pengguna ke sesi
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            // Redirect ke halaman dashboard atau halaman lain setelah login
            echo "Login berhasil!";
            header("Location: ../list-mahasiswa.php");
        } else {
            // Password salah
            echo "Password salah!";
            header("Location: ../login.php");
        }
    } else {
        // Pengguna tidak ditemukan
        echo "Email tidak terdaftar!";
        header("Location: ../login.php");
    }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
} else {
    echo "Akses tidak sah!";
    header("Location: ../login.php");
    exit();
}
?>
