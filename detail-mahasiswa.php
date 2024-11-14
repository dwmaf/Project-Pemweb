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
    <?php include 'components/navbar.php'; ?>
    <div class="p-4 mt-2 mb-2 d-flex flex-column align-items-center ">
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
                    <h2 class="genshin"><?= htmlspecialchars($mahasiswa['nama'], ENT_QUOTES, 'UTF-8') ?></h2>
                    <h5 class="genshin" style="color:darkgrey"><?= htmlspecialchars($mahasiswa['nim'], ENT_QUOTES, 'UTF-8') ?></h5>
                    <h4 class="genshin" style="justify-self:start;background-color:#3cc1ca; border-radius:40px; padding:10px;"><?= htmlspecialchars($mahasiswa['kelamin'], ENT_QUOTES, 'UTF-8') ?></h4>
                    <div class="d-flex gap-1" style="flex-wrap: wrap; margin-bottom:8px;">
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
                        <h3 class="genshin" style="margin-bottom:0; font-weight:bold; color:#01454a"><?= htmlspecialchars($mahasiswa['domisili'], ENT_QUOTES, 'UTF-8') ?></h3>
                    </div>
                </div>
                <div class="data-bawah" style="width: clamp(300px,38.4vw, 468px);background-color: white;border-radius: 55px; padding: 20px;">
                    <div style="display: flex; gap:16px">
                        <button popovertarget="my-popover" style="padding:10px; border:solid 1px black; border-radius:20px;background-color: yellow">
                            <p class="genshin" style="margin: 0;font-size:14px;">Edit</p>
                        </button>
                        <form method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" action="handler/delete_data.php">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($mahasiswa['id'], ENT_QUOTES, 'UTF-8') ?>">
                            <button type="submit" name="delete" style="padding: 10px; border: solid 1px black; border-radius: 20px; background-color: red">
                                <p class="genshin" style="margin: 0; font-size: 14px; color: white;">Hapus</p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div popover id="my-popover" class="form-edit">
        <form class="form-kontak" method="post" action="handler/update_data.php" enctype="multipart/form-data">
            <h5>Edit Form</h5>
            <div id="NIM" class="input-container">
                <label class="label-kontak">NIM</label>
                <i class="fa-solid fa-id-card icon-fa"></i>
                <input class="input-kontak nama-nim" type="text" placeholder="Masukkan NIM" name="nim" required value="<?= htmlspecialchars($mahasiswa['nama'], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div id="nama" class="input-container">
                <label class="label-kontak">Nama Lengkap</label>
                <i class="fas fa-user icon-fa"></i>
                <input class="input-kontak nama-nim" type="text" placeholder="Masukkan nama" name="nama" required value="<?= htmlspecialchars($mahasiswa['nim'], ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div id="radio" class="input-container">
                <label class="label-kontak">Jenis Kelamin</label>
                <div class="options-kontak">
                    <div class="option-kontak">
                        <input required type="radio" id="laki-laki" name="kelamin" value="laki-laki" value="laki-laki" <?= $mahasiswa['kelamin'] == 'laki-laki' ? 'checked' : '' ?>>
                        <label for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="option-kontak">
                        <input required type="radio" id="perempuan" name="kelamin" value="perempuan" value="perempuan" <?= $mahasiswa['kelamin'] == 'perempuan' ? 'checked' : '' ?>>
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="input-container">
                <label class="label-kontak">Matakuliah</label>
                <div class="options-kontak">
                    <div class="option-kontak">
                        <input type="checkbox" id="web" name="makul[]" value="Pemrograman Web" >
                        <label for="web">Web</label>
                    </div>
                    <div class="option-kontak">
                        <input type="checkbox" id="basis-data" name="makul[]" value="Perancangan Basis Data" >
                        <label for="basis-data">Basis Data</label>
                    </div>
                    <div class="option-kontak">
                        <input type="checkbox" id="jaringan" name="makul[]" value="Jaringan" >
                        <label for="jaringan">Jaringan</label>
                    </div>
                </div>
            </div>

            <div class="input-container">
                <label class="label-kontak">Domisili</label>
                <select name="domisili" class="input-kontak" required>
                    <option value="Kubu Raya" <?= $mahasiswa['domisili'] == 'Kubu Raya' ? 'selected' : '' ?>>Kubu Raya</option>
                    <option value="Pontianak" <?= $mahasiswa['domisili'] == 'Pontianak' ? 'selected' : '' ?>>Pontianak</option>
                    <option value="Sungai Raya" <?= $mahasiswa['domisili'] == 'Sungai Raya' ? 'selected' : '' ?>>Sungai Raya</option>
                    <option value="Sungai Raya Dalam" <?= $mahasiswa['domisili'] == 'Sungai Raya Dalam' ? 'selected' : '' ?>>Sungai Raya Dalam</option>
                </select>
            </div>

            <div class="input-container">
                <label class="label-kontak">Tgl. Lahir</label>
                <input name="tgllahir" type="date" class="input-kontak" required value="<?= htmlspecialchars($mahasiswa['tgl_lahir'], ENT_QUOTES, 'UTF-8') ?>">
            </div>

            <div class="input-container">
                <label class="label-kontak">Foto</label>
                <input type="file" name="foto" accept="image/*" class="input-kontak" required>
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>