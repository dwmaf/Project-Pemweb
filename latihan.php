<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Latihan PemWeb</title>
  <link rel="stylesheet" type="text/css" href="/Pemweb/css/form.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
  <?php
  if (isset($_SESSION['success_message'])) {
    echo "<p style='color: green;'>" . $_SESSION['success_message'] . "</p>";
    unset($_SESSION['success_message']);
  }
  ?>
  <!-- xl -->
  <div class="letshiditxl  m-1 gap-1 " >
    <?php include 'components/sectionkiri.php'; ?>
    <?php include 'components/tengah-latihan.php'; ?>
    <?php include 'components/sectionkanan.php'; ?>
  </div>
   <div class="letshiditsm">ini sm display</div>
   <div class="letshiditmd">ini md display</div>
   <div class="letshiditlg">ini lg display</div>

  <!-- lg -->
  

  <style>
    /* work */
    @media (max-width: 576px)  {
      .letshiditxl {
        display: none;
      }
      .letshiditlg {
        display: none;
      }
      .letshiditmd {
        display: none;
      }
      .letshiditsm {
        display: flex;
      }
    }
    @media (min-width: 576px) AND (max-width:768px)  {
      .letshiditxl {
        display: none;
      }
      .letshiditlg {
        display: none;
      }
      .letshiditmd {
        display: flex;
      }
      .letshiditsm {
        display: none;
      }
    }
    @media (min-width: 768px) AND (max-width:992px)  {
      .letshiditxl {
        display: none;
      }
      .letshiditlg {
        display: flex;
      }
      .letshiditmd {
        display: none;
      }
      .letshiditsm {
        display: none;
      }
    }
    @media (min-width: 992px) {
      .letshiditxl {
        display: flex;
      }
      .letshiditlg {
        display: none;
      }
      .letshiditmd {
        display: none;
      }
      .letshiditsm {
        display: none;
      }
    }
  </style>
</body>

</html>