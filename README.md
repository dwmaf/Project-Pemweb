# Project-Pemweb

<!-- ini xl -->

<!-- ini lg -->

<!-- ini lg-md -->
  <div class="letshiditlg" style="flex-direction:column ">
    <?php include 'components/lg/tengah-index-lg.php'; ?>
    <div style="display: flex; margin:10px; justify-content:space-between">
      <?php include 'components/lg/kiri-lg.php'; ?>
      <?php include 'components/lg/kanan-lg.php'; ?>
    </div>
  </div>

  <!-- ini sm -->
  <div class="letshiditsm" style="flex-direction:column; padding: 10px;">
    <?php include 'components/sm/tengah-index-sm.php'; ?>
    <?php include 'components/sm/kiri-sm.php'; ?>
    <?php include 'components/sm/kanan-sm.php'; ?>
  </div>

<!-- foto di list mahasiswa -->
<div class="rounded-circle overflow-hidden mx-auto" style="width: 200px; height: 200px;">
                        <img class="img-fluid" style="object-fit: none; object-position: 100% 0;"
                            src="<?= htmlspecialchars($poi['path_foto'], ENT_QUOTES, 'UTF-8') ?>"
                            alt="<?= htmlspecialchars($poi['id'], ENT_QUOTES, 'UTF-8') ?>">

                    </div>
