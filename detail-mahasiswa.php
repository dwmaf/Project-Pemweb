<?php
include('./db/koneksi.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '" . mysqli_real_escape_string($conn, $id) . "'");
    $mahasiswa = mysqli_fetch_assoc($query);
} else {
    echo "<p>ID tidak ditemukan di URL.</p>";
}
$tanggal = $mahasiswa['tgl_lahir'];
$date = new DateTime($tanggal);
$tglbulan = $date->format('j M');
$tahun = $date->format('Y');

$makul = $mahasiswa['mata_kuliah'];
if (strpos($makul, ',') !== false) {
    $makulArray = explode(',', $makul);
    $makulArray = array_map('trim', $makulArray);
} else {
    $makulArray = [$makul];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>UAS PemWeb</title>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="preload" href="./assets/Bento-2OXaW.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <script type="module" src="http://localhost:5173/main.js"></script>
</head>
<style>
    body {
        background-image: url('assets/aset2.webp');
        background-size: cover;
        backdrop-filter: blur(3px);
    }

    .data-kanan {
        padding-left: 0 !important;
        /* Menghilangkan padding pada setiap kolom */
    }
</style>
</head>

<body class="detail-mahasiswa">
    <?php include 'components/header.php'; ?>
    <div class="container mt-2 mb-2 d-flex flex-column align-items-center ">
        <div class="row d-flex justify-content-center gap-2" style="padding: 0;">
            <div class="gambar-kiri col-6 d-flex " style="background-image:url('assets/bait.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                        height: clamp(482px, 61vw,752px);
                        width: clamp(300px,38.4vw, 468px); padding:10px;">
                <div class="img-container" style="  height:67%; border-radius:clamp(70px,9.25vw,115px); 
                overflow:hidden; border:clamp(3px,0.4vw, 6px) solid black; align-self:flex-end">
                    <img class="img-fluid"
                        src="<?= htmlspecialchars($mahasiswa['path_foto'], ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($mahasiswa['id'], ENT_QUOTES, 'UTF-8') ?>">
                </div>
            </div>
            <div class="data-kanan col-6 d-flex flex-column gap-2" style="width: clamp(300px,38.4vw, 468px); ">
                <div class="data-atas" style="width: clamp(300px,38.4vw, 468px);background-color: white;border-radius: 55px;padding:20px; ">
                    <h2 class="genshin" style=""><?= htmlspecialchars($mahasiswa['nama'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <h5 class="genshin" style="color:darkgrey"><?= htmlspecialchars($mahasiswa['nim'], ENT_QUOTES, 'UTF-8') ?></h5>
                    <h4 class="genshin" style="justify-self:start;background-color:#3cc1ca; border-radius:40px; padding:10px;"><?= htmlspecialchars($mahasiswa['kelamin'], ENT_QUOTES, 'UTF-8') ?></h4>
                    <div class="d-flex gap-1" style="flex-wrap: wrap;">
                        <?php foreach ($makulArray as $index => $matkul) : ?>
                            <h6 class="genshin" style="justify-self:start;border:solid 1px black;font-size:15px; border-radius:40px; padding:6px;margin-bottom:0;">
                                <?= htmlspecialchars($matkul, ENT_QUOTES, 'UTF-8') ?>
                            </h6>
                        <?php endforeach; ?>
                    </div>
                    <div class="d-flex gap-2 mt-1" style="justify-self:start; background-color:#3cc1ca; padding:10px; border-radius:40px">
                        <div class="d-flex flex-column">
                            <h5 class="genshin" style="margin-bottom:0; font-size:13px;"><?= htmlspecialchars($tglbulan, ENT_QUOTES, 'UTF-8') ?></h5>
                            <h5 class="genshin" style="margin-bottom:0; font-size:13px;"><?= htmlspecialchars($tahun, ENT_QUOTES, 'UTF-8') ?></h5>
                        </div>
                        <span style="height: 28px;  border:solid 1px black;"></span>
                        <h3 class="genshin" style="margin-bottom:0; font-weight:bold"><?= htmlspecialchars($mahasiswa['domisili'], ENT_QUOTES, 'UTF-8') ?></h3>
                    </div>
                </div>
                <div class="data-bawah" style="width: clamp(300px,38.4vw, 468px);background-color: white;border-radius: 55px;">
                    
                </div>
            </div>
        </div>

    </div>
    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>