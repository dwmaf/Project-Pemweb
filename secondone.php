<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Latihan PemWeb</title>
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

  <div class="letshidit row m-1 gap-1 ">
    <!-- section kiri -->
    <div class="col-lg" style="  background-image: url('assets/kiri.png'); 
     background-size: 100% 100%; background-repeat: no-repeat; max-width:25%; height: 886px; display: flex; flex-direction: column; justify-content: space-between;">
      <div style="display: flex; justify-content: space-between; margin-right:50px; ">
        <div name="huruf jepang" style="font-family: 'Noto Serif JP'; font-size:60px; font-weight:bold; color:#3CC1CA; margin-left:10px; ">ォ</div>
        <a href="index.php" style="font-size: 18px; display: flex; align-items: center; text-decoration:none; color:black; ">
          <div style=" font-family:'Inter'; font-weight:bold; margin-right: 8px;">
            Home
          </div>
          <i class="fa-solid fa-home"></i>
        </a>

      </div>
      <p name="tugas pemweb" class="" style="font-size: 35px; font-weight:bold; font-family:'Inter'; margin-left:20px; margin-top:30px">UTS Pemweb</p>
      <div name="tombol hijau" class="btn" style="margin-top:5px;margin-left:20px;width: 80px;height: 80px;border-radius: 100%;background-color: #3CC1CA;display: flex;justify-content: center;align-items: center; z-index: 2;position:relative"><i class="fa-solid fa-code fa-2x" style="color:white"></i></div>
      <div name="gambar" class="bg-primary " style="border-radius: 100px; margin-top:-40px;margin-left:20px; margin-right:20px; height:40%; overflow:hidden; z-index: 1; position:relative ">
        <img src="assets/aset2.jpg" alt="">
      </div>

      <div style="display: flex; justify-content: space-between; position:relative; z-index:2; margin-top: -40px; margin-left:20px;">
        <div style="display: flex; flex-direction: column;">
          <div name="07" class="" style=" font-size: 70px; font-weight:bold; font-family:'Inter'; color:red;">07</div>
          <div name="Dawam AF" class="" style=" font-size: 20px; font-weight:bold; font-family:'Inter'; margin-top:-10px ">Dawam AF</div>
        </div>
        <div name="huruf jepang" style="font-family: 'Noto Serif JP'; font-size:140px; font-weight:bold; color:red; margin-top:-60px">ネ</div>
      </div>

      <p name="desc" class="" style="width: 70%; font-size: 12px; font-family:'Inter'; margin-left:20px;">Tech stack yang digunakan untuk membuat website ini antara lain figma untuk mendesain shapenya, php untuk menangani form, bootstrap dan inline css untuk styling</p>
      <div name="dua tombol" style="display: flex; align-items:center; margin-left:20px; margin-bottom:20px">
        <button class="btn " style="background-color: #ECEEF9; border-radius: 23px; display: flex; align-items: center; padding: 10px; margin-right: 14px">
          <i class="fa-regular fa-address-book" style="margin-right: 8px;"></i>
          <div style="font-size: 12px; font-family:'Inter'; font-weight:bold">
            Kontak
          </div>
        </button>

        <button class="btn " style="background-color: #ECEEF9; border-radius: 23px; display: flex; align-items: center; padding: 10px">
          <i class="fa-solid fa-dumbbell" style="margin-right: 8px;"></i>
          <div style="font-size: 12px; font-family:'Inter'; font-weight:bold">
            Latihan
          </div>
        </button>
      </div>
    </div>

<!-- section tengah -->
    <div class="col-lg-6 " style="  background-image: url('assets/tengah-with-image.png');
    background-size: 100% 100%; background-repeat: no-repeat; height: 886px; display: flex; flex-direction: column; justify-content: space-between;">

      <div style="display: flex; justify-content: space-between;">
        <div style="display: flex; justify-content: space-between;align-items: center;padding:20px; margin-top:40px; margin-left:30px; background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); border-radius:50px;">
          <i class="fa-solid fa-home" style="margin-right: 50px; font-size: 20px; color:white"></i>
          <i class="fa-solid fa-address-book" style="margin-right: 50px; font-size: 20px;color:white"></i>
          <i class="fa-solid fa-dumbbell" style=" font-size: 20px;color:white"></i>
        </div>
        <div class="btn" style="width: 90px; height: 90px; background-color:black; border-radius:100%; display: flex;justify-content: center;align-items: center; margin-top:20px;"><i class="fa-solid fa-sliders" style="color:white; font-size:35px;"></i></div>
      </div>
      <div id="componen1" style=" background-image: url('assets/componen1.png');background-size: 100% 100%; background-repeat: no-repeat; height: 330px; width: 453px; margin-bottom:20px; margin-left:20px">
        <div style="display: flex; justify-content:space-between;  margin-top:50px">
          <div style="display: flex; flex-direction: column; justify-content:space-between; margin-left:50px; margin-right:30px; margin-bottom:40px">
            <div>
              <div class="bento" style="font-family: 'Bento'; font-size:90px; line-height:1">Porto</div>
              <div class="bento" style="font-family: 'Bento'; font-size:90px; line-height: 0; margin-top:15px">folio</div>
            </div>
            <div style="display: flex; ">
              <button class="btn " style="background-color: #ECEEF9; border-radius: 23px; display: flex; align-items: center; padding: 10px; margin-right: 14px">
                <i class="fa-regular fa-address-book" style="margin-right: 8px;"></i>
                <div style="font-size: 12px; font-family:'Inter'; font-weight:bold">
                  Kontak
                </div>
              </button>

              <button class="btn " style="background-color: #ECEEF9; border-radius: 23px; display: flex; align-items: center; padding: 10px">
                <i class="fa-solid fa-dumbbell" style="margin-right: 8px;"></i>
                <div style="font-size: 12px; font-family:'Inter'; font-weight:bold">
                  Latihan
                </div>
              </button>
            </div>
          </div>

          <div style="display: flex; flex-direction: column;">
            <div name="tombol merah" class="btn" style="margin-top:5px;margin-left:20px;width: 80px;height: 80px;border-radius: 100%;background-color: red;display: flex;justify-content: center;align-items: center; z-index: 2;position:relative"><i class="fa-solid fa-code fa-2x" style="color:white"></i></div>
            <div style="display: flex;  margin-top: 30px">
              <div name="07" class="" style=" font-size: 40px; font-weight:bold; font-family:'Inter'; color: #3CC1CA;">23</div>
              <div name="huruf jepang" style="font-family: 'Noto Serif JP'; font-size:140px; font-weight:bold; color:#3CC1CA;; margin-top:-60px; margin-left:-20px">タ</div>
            </div>
          </div>
        </div>
      </div>



    </div>
<!-- section kanan -->
    <div class="col-lg " style="   background-image: url('assets/kanan.png'); background-size: 100% 100%; background-repeat: no-repeat;max-width:24%;  height: 886px; display: flex; flex-direction: column; justify-content: space-between; padding:30px">
      <div class="bento" style="font-family: 'Bento'; font-size:60px; line-height:1">Porto</div>
      <div style="margin-top: 40px;">
        <div name="gambar-right" class="bg-primary " style="border-radius: 100px; margin-top:-40px; height:40%; overflow:hidden; ">
          <img src="assets/aset2.jpg" alt="" style="transform: translateX(-50%);">
        </div>
        <div name="tombol merah" class="btn" style="margin-top:-20px;margin-left: auto; margin-right: auto; width: 80px;height: 80px;border-radius: 100%;background-color: red;display: flex;justify-content: center;align-items: center; z-index: 2;position:relative"><i class="fa-solid fa-code fa-2x" style="color:white"></i></div>
      </div>
      <div style="display: flex; justify-content:space-between">

      </div>

    </div>
  </div>

  <style>
    @media (max-width: 992px) {
      .letshidit {
        display: none;
      }
    }
  </style>
</body>

</html>