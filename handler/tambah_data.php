<?php

include '../db/koneksi.php';
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

    $target_dir = "../uploads/";
    $file_extension = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
    $random_filename = uniqid() . "." . $file_extension;
    $target_file = $target_dir . $random_filename;
    $path_foto = "./uploads/".$random_filename;
    $uploadOk = 1;

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {        
        $sql = "INSERT INTO mahasiswa (nim, nama, kelamin, mata_kuliah, domisili, tgl_lahir, path_foto) 
                VALUES ('$nim', '$nama', '$kelamin', '$mata_kuliah', '$domisili', '$tgl_lahir', '$path_foto')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "Data berhasil dimasukkan ke database.";
            header("Location: ../index.php");
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
