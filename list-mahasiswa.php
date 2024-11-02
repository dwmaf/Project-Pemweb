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
<!DOCTYPE html>
<html>

<head>
    <title>UAS PemWeb</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="preload" href="./assets/Bento-2OXaW.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" crossorigin href="./css/index-6hYYyCmg.css"> -->
    <script type="module" src="http://localhost:5173/main.js"></script>
</head>
<style>
    body {
        background-image: url('assets/aset2.webp');
        background-size: cover;
        backdrop-filter: blur(3px);
    }

    @font-face {
        font-family: 'Bento';
        src: url('assets/Bento-2OXaW.woff2') format('woff2')
    }

    .bento {
        font-family: 'Bento', sans-serif;
    }
</style>
</head>

<body>
    <div class="container ">
        <div class="row g-0 gap-3 pt-3 justify-content-center">
            <?php foreach ($mahasiswas as $index => $poi) : ?>
                <div class="col-5 col-md-2 d-flex flex-column justify-content-between" style="
                        background-image:url('assets/bait-3.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                        height: 251px;
                        width: 156px;
                        ">
                    <h5 class="bento mt-4" style="margin-left: 20px; line-height:0;">
                        <?= htmlspecialchars(substr($poi['nama'], 0, 5), ENT_QUOTES, 'UTF-8') ?>
                    </h5>

                    <a href="" class="btn btn-danger mx-auto justify-content-center" style="height:40px;width:40px; position:relative; z-index:2; border-radius:100%; top:20px;">
                     <h1 class="bento" style="line-height: 0; margin-top:90%; font-size:35px">X</h1>
                    </a>
                    <div style="border: 2px solid black; width:100%; height:70%; border-radius:30px; overflow:hidden; position:relative; z-index:1;">
                        <img class="img-fluid"
                            src="<?= htmlspecialchars($poi['path_foto'], ENT_QUOTES, 'UTF-8') ?>"
                            alt="<?= htmlspecialchars($poi['id'], ENT_QUOTES, 'UTF-8') ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>


</html>