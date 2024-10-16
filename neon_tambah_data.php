<?php

include 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $domisili = $_POST['domisili'];
    $tgl_lahir = $_POST['tgllahir'];

    if (isset($_POST['makul'])) {        
        $mata_kuliah = implode(", ", $_POST['makul']);
    } else {
        $mata_kuliah = ''; 
    }

    $target_dir = "uploads/";
    $file_extension = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    $random_filename = uniqid() . "." . $file_extension;
    $target_file = $target_dir . $random_filename;

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {        
        // Use parameterized queries for security
        $sql = "INSERT INTO mahasiswa (nim, nama, kelamin, mata_kuliah, domisili, tgl_lahir, path_foto) 
                VALUES ($1, $2, $3, $4, $5, $6, $7)";

        // Prepare the query
        $result = pg_query_params($conn, $sql, array($nim, $nama, $kelamin, $mata_kuliah, $domisili, $tgl_lahir, $target_file));

        if ($result) {
            $_SESSION['success_message'] = "Data berhasil dimasukkan ke database.";
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . pg_last_error($conn);
        }
    } else {
        echo "Maaf, terjadi kesalahan saat mengupload file.";
    }
}

pg_close($conn);
?>
