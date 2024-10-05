<?php
// Sertakan file koneksi.php
include 'koneksi.php';
session_start();
// Memeriksa apakah data telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $domisili = $_POST['domisili'];
    $tgl_lahir = $_POST['tgllahir'];
    $alamat = $_POST['alamat'];

    // Menangani array dari checkbox mata kuliah
    if (isset($_POST['makul'])) {
        // Menggabungkan semua pilihan checkbox menjadi satu string
        $mata_kuliah = implode(", ", $_POST['makul']);
    } else {
        $mata_kuliah = ''; // Jika tidak ada yang dipilih
    }

    // Mengatur direktori untuk upload file gambar
    $target_dir = "uploads/";
    $file_extension = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    $random_filename = uniqid() . "." . $file_extension;
    $target_file = $target_dir . $random_filename;
    $uploadOk = 1;

    // Mengecek apakah file gambar dan lainnya
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // Menyimpan data ke database
        $sql = "INSERT INTO mahasiswa (nim, nama, kelamin, mata_kuliah, domisili, tgl_lahir, path_foto, alamat) 
                VALUES ('$nim', '$nama', '$kelamin', '$mata_kuliah', '$domisili', '$tgl_lahir', '$target_file', '$alamat')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "Data berhasil dimasukkan ke database.";
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Maaf, terjadi kesalahan saat mengupload file.";
    }
}

$conn->close();
?>
