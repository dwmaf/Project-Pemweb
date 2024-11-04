<?php
include('./db/koneksi.php');
$limit = 8;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$page = max($page, 1); // pastikan halaman minimal 1

$offset = ($page - 1) * $limit;

$totalQuery = mysqli_query($conn, "SELECT COUNT(*) as total FROM mahasiswa");
$totalRow = mysqli_fetch_assoc($totalQuery);
$totalData = $totalRow['total'];

$totalPages = ceil($totalData / $limit);

$query = mysqli_query($conn, "SELECT * FROM mahasiswa LIMIT $limit OFFSET $offset");
$mahasiswas = [];
while ($row = mysqli_fetch_assoc($query)) {
    $mahasiswas[] = $row;
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
    /* .toltip {
        cursor: pointer;
    }
    .tooltip-box {
        visibility: hidden;
        background-color: #3cc1ca;
        color: black;
        position: absolute;
        font-size: 12px;
        font-family: 'Inter';
        padding: 8px;
        border-radius: 4px;
        opacity: 0;
        transition: opacity 0.3s;
    } */
</style>
</head>

<body class="list-mahasiswa">
    <?php include 'components/header.php'; ?>
    <div class="container " style="min-height: 100vh;">
        <div class="row g-0 gap-3 pt-3 pb-3 justify-content-center">
            <?php foreach ($mahasiswas as $index => $mahasiswa) : ?>
                <div class="col-3 d-flex flex-column justify-content-between" style="
                        background-image:url('assets/bait-3.png');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position: center;
                        height: 376px;
                        width: 234px;
                        ">
                    <div class="d-flex justify-content-between mt-4" style="margin-left: 25px; margin-right:30px">
                        <h1 class="bento mt-4" style=" line-height:0; font-size:40px;">
                            <?= htmlspecialchars(substr($mahasiswa['nama'], 0, 5), ENT_QUOTES, 'UTF-8') ?>
                        </h1>
                        <h1 class="bento mt-2" style=" line-height:0; font-size:40px;">X</h1>
                    </div>
                    <div class="bg-black d-flex flex-column " style="border: 1px solid black; width:100%; height:77%; border-radius:42px; padding:2px 2px 0 2px; ">
                        <div style="  height:67%; border-radius:40px; overflow:hidden; position:relative; z-index:1;">
                            <img class="img-fluid"
                                src="<?= htmlspecialchars($mahasiswa['path_foto'], ENT_QUOTES, 'UTF-8') ?>"
                                alt="<?= htmlspecialchars($mahasiswa['id'], ENT_QUOTES, 'UTF-8') ?>">
                        </div>
                        <a href="detail-mahasiswa.php?id=<?= urlencode($mahasiswa['id']) ?>" class="btn btn-danger mx-auto justify-content-center"
                            style="height:50px;width:50px; position:relative; z-index:2;
                         border-radius:100%; top:-30px;
                         transition: 0.3s ease; box-shadow: 0 0 10px #e60000;">
                            <h1 style="line-height: 0; margin-top:80%; font-size:45px; font-family: 'Bento';">X</h1>
                        </a>
                        <div class="d-flex mx-auto gap-3" style="margin-top: -10px;">
                            <h5 class="genshin" 
                            style="background-color: #3cc1ca;
                            color: black;
                            font-size: 12px;
                            padding: 8px;
                            border-radius: 10px;"><?= htmlspecialchars(substr($mahasiswa['nim'], 0, 11), ENT_QUOTES, 'UTF-8') ?></h5>
                            <h5 class="genshin"
                            style="background-color: #3cc1ca;
                            color: black;
                            font-size: 12px;
                            padding: 8px;
                            border-radius: 10px;"><?= htmlspecialchars($mahasiswa['domisili'], ENT_QUOTES, 'UTF-8') ?></h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Navigasi Pagination -->

        <?php if ($totalData > $limit): ?>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <?php if ($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if ($page < $totalPages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        <?php endif; ?>
    </div>
    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // document.querySelectorAll('.toltip').forEach(function(element) {
        //     let tooltipBox = document.createElement('div');
        //     tooltipBox.className = 'tooltip-box';
        //     tooltipBox.innerText = element.getAttribute('data-title');
        //     element.appendChild(tooltipBox);
        //     element.addEventListener('mouseenter', function() {
        //         tooltipBox.style.visibility = 'visible';
        //         tooltipBox.style.opacity = '1';
        //     });
        //     element.addEventListener('mouseleave', function() {
        //         tooltipBox.style.visibility = 'hidden';
        //         tooltipBox.style.opacity = '0';
        //     });
        // });
    </script>
</body>


</html>