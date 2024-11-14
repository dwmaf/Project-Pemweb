<?php
include '../db/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_mahasiswa = intval($_POST['id']);

    $sql = "DELETE FROM mahasiswa WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_mahasiswa);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='../list-mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!');</script>";
    }
    
    $stmt->close();
}

$conn->close();
?>
