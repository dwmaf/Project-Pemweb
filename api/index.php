<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Latihan PemWeb</title>
  <link rel="stylesheet" type="text/css" href="/Pemweb/css/form.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="/Pemweb/css/section-kiri.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
  body {
    background-image: url('assets/aset2.jpg');
    background-size: cover;
    backdrop-filter: blur(3px);
  }

  @font-face {
    font-family: 'Bento';
    src: url('assets/Bento-2OXaW.otf') format('opentype');
  }

  .bento {
    font-family: 'Bento', sans-serif;
  }
</style>
</head>

<body>

  <!-- main section -->
  <div class="letshiditxl  m-1 gap-1 ">
    <?php include 'components/sectionkiri.php'; ?>
    <?php include 'components/tengah-index.php'; ?>
    <?php include 'components/sectionkanan.php'; ?>
  </div>
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
  <div class="letshiditsm">ini sm display</div>




  <style>
    @media (max-width: 576px) {
      .letshiditxl {
        display: none;
      }

      .letshiditlg {
        display: none;
      }
      .letshiditsm {
        display: flex;
      }
    }

    @media (min-width: 576px) AND (max-width:768px) {
      .letshiditxl {
        display: none;
      }

      .letshiditlg {
        display: flex;
      }

      .letshiditsm {
        display: none;
      }
      .tengah-lg-md {
        background-image: url('assets/md/tengah-md.png');
      }
    }

    @media (min-width: 768px) AND (max-width:992px) {
      .letshiditxl {
        display: none;
      }

      .letshiditlg {
        display: flex;
      }

      .letshiditsm {
        display: none;
      }
      .tengah-lg-md {
        background-image: url('assets/lg/tengah-lg.png');
      }
    }

    @media (min-width: 992px) {
      .letshiditxl {
        display: flex;
      }

      .letshiditlg {
        display: none;
      }

      .letshiditsm {
        display: none;
      }
    }
  </style>
  <script>
    document.querySelector('.btn-close-session').addEventListener('click', function() {
      document.querySelector('.session-masuk').style.display = 'none';
    });

    // $(document).ready(function() {
    //   $(".btn-menu-lain").click(function() {
    //     if ($(".menu-lain").is(":visible")) {
    //       $(".menu-lain").hide(); // Sembunyikan tanpa efek
    //     } else {
    //       $(".menu-lain").show(); // Tampilkan tanpa efek
    //     }
    //   });
    // });
  </script>

</body>

</html>