<?php
session_start();
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
    background-image: url('assets/aset2.jpg');
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
<?php
    if (isset($_SESSION['success_message'])) {
        include 'components/db-masuk.php';
        unset($_SESSION['success_message']);
    }
?>

  <div class="letshiditxl" style="padding:4px; gap:4px">
    <?php include 'components/sectionkiri.php'; ?>
    <?php include 'components/tengah-index.php'; ?>
    <?php include 'components/sectionkanan.php'; ?>
  </div>

  <div class="letshiditlgmd" style="margin: 4px; gap:4px">
    <?php include 'components/tengah-index.php'; ?>
    <div style="display:flex; justify-content:space-between; gap:4px">
      <?php include 'components/sectionkiri.php'; ?>
      <?php include 'components/sectionkanan.php'; ?>
    </div>
  </div>
  <style>
    
  </style>
  <script>
    document.querySelector('.btn-close-session').addEventListener('click', function() {
      document.querySelector('.db-masuk').style.display = 'none';
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