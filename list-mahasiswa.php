<?php
include('./db/koneksi.php');
$query = mysqli_query($conn, "SELECT * FROM mahasiswa"); // Use $conn as defined in koneksi.php

// Step 2: Fetch all rows into an array
$mahasiswas = [];
while ($row = mysqli_fetch_assoc($query)) {
    $mahasiswas[] = $row;
}
$length = count($mahasiswas);
?>
<div>
    <?php foreach ($mahasiswas as $index => $poi) : ?>
        <div style="background-size: 100% 100%;
    background-repeat: no-repeat;
    height: clamp(200px, 33vw, 330px);
    width: clamp(275px, 45vw, 453px);">
            <div style="border-radius: 100px;
        overflow: hidden;
        height: 200px;
        width: 400px;
        position: relative;
        z-index: 1;">
                <img style=" width: 100%;
          height: 100%;
          object-fit: none;
          object-position: 100% 0;" src="<?= htmlspecialchars($poi['path_foto'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($poi['id'], ENT_QUOTES, 'UTF-8') ?>">
            </div>
        </div>
    <?php endforeach; ?>
</div>