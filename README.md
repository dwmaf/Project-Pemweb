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


  <?php
    if (isset($_SESSION['success_message'])) {
        echo "<div class='session-masuk' >
        <div class='huruf-jepang'><div>せ</div><div>い</div><div>こ</div><div>う</div></div><div class='pesan-container' ><div class='pesan-satu' >Data berhasil</div><div class='pesan-dua'>masuk ke database</div></div><button class='btn-close-session'><i class='fa-solid fa-xmark'></i></button></div>";
        unset($_SESSION['success_message']);
    }
    ?>