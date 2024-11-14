<?php
include '../db/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            echo "Login berhasil!";
            header("Location: ../list-mahasiswa.php");
        } else {
            echo "Password salah!";
            header("Location: ../login.php");
        }
    } else {
        echo "Email tidak terdaftar!";
        header("Location: ../login.php");
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Akses tidak sah!";
    header("Location: ../login.php");
    exit();
}
?>
