<?php
include '../db/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Mengambil data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Hashing password untuk keamanan
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    // Memasukkan data ke database
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registrasi berhasil! Silakan login.";
        header("Location: ../login.php");
    } else {
        if ($conn->errno == 1062) {
            echo "Email sudah terdaftar!";
            header("Location: ../register.php");
        } else {
            echo "Terjadi kesalahan! Silakan coba lagi.";
            header("Location: ../register.php");
        }
    }
    $stmt->close();
    $conn->close();
} else {
    echo "Akses tidak sah!";
    header("Location: ../register.php");
    exit();
}
?>
