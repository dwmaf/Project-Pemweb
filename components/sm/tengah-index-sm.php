<div class="tengah-lg-md" style=" background-image: url('assets/sm/tengah-sm.png');  
    background-size: 100% 100%; background-repeat: no-repeat; height: 888px; display: flex; flex-direction: column; justify-content: space-between;
    ">
    <div style="display: flex; justify-content: space-between;">
        <div style="display: flex; justify-content: space-between;align-items: center;padding:20px; margin-top:40px; margin-left:30px; background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); border-radius:50px;">
            <a href="index.php">
                <i class="fa-solid fa-home" style="margin-right: 50px; font-size: 20px; color:white"></i>
            </a>
            <a href="kontak.php">
                <i class="fa-solid fa-address-book" style="margin-right: 50px; font-size: 20px;color:white"></i>
            </a>
            <a href="latihan.php">
                <i class="fa-solid fa-dumbbell" style=" font-size: 20px;color:white"></i>
            </a>
        </div>
        <div name="judul halaman" style="font-family: 'Bento'; font-size:40px; background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); border-radius:50px; color:white; margin-top:40px; padding:20px; height:70px; display:flex; align-items:center; justify-content:center">Home</div>
        <button class="btn btn-menu-lain" style="width: 90px; height: 90px; background-color:#414144; border-radius:100%; display: flex;justify-content: center;align-items: center; margin-top:20px;"><i class="fa-solid fa-sliders" style="color:white; font-size:35px;"></i></button>
    </div>

    <?php
    if (isset($_SESSION['success_message'])) {
        echo "<div class='session-masuk' >
        <div class='huruf-jepang'><div>せ</div><div>い</div><div>こ</div><div>う</div></div><div class='pesan-container' ><div class='pesan-satu' >Data berhasil</div><div class='pesan-dua'>masuk ke database</div></div><button class='btn-close-session'><i class='fa-solid fa-xmark'></i></button></div>";
        unset($_SESSION['success_message']);
    }
    ?>
    <div class="menu-lain" style="background-color: rgb(0,0,0,0.5); backdrop-filter:blur(5px); display:none; flex-direction:column; padding:10px; border-radius:50px; width:90px;  margin-left:auto; margin-top:-140px">
        <i class="fa-solid fa-home" style="margin-bottom:50px; margin-top:20px; font-size: 20px; color:white"></i>
        <i class="fa-solid fa-home" style="margin-bottom:50px; font-size: 20px; color:white"></i>
        <i class="fa-solid fa-home" style="margin-bottom:20px; font-size: 20px; color:white"></i>
    </div>

    <div id="componen1" style=" background-image: url('assets/componen1.png');background-size: 100% 100%; background-repeat: no-repeat; 
    height: clamp(200px, 40vw, 330px); 
    width: clamp(300px, 50vw, 453px); 
    margin-bottom:20px; margin-left:20px; display: flex; justify-content:space-between;
    padding:20px 0 20px 20px ">
        
            <div style="display: flex; flex-direction: column; justify-content:space-between; margin-right: clamp(10px, 3vw, 30px); ">
                <div>
                    <div class="bento" style="font-family: 'Bento'; font-size:clamp(60px, 5vw, 90px); line-height:1">Porto</div>
                    <div class="bento" style="font-family: 'Bento'; font-size:clamp(60px, 5vw, 90px); line-height: 0; margin-top:15px">folio</div>
                </div>
                <div style="display: flex; ">
                    <a href="kontak.php" class="btn " style="background-color: #ECEEF9; border-radius: 23px; display: flex; align-items: center; padding: 10px; margin-right: 14px">
                        <i class="fa-regular fa-address-book" style="margin-right: 8px;"></i>
                        <div style="font-size:clamp(10px, 1.5vw, 12px); font-family:'Inter'; font-weight:bold">
                            Kontak
                        </div>
                    </a>

                    <a href="latihan.php" class="btn " style="background-color: #ECEEF9; border-radius: 23px; display: flex; align-items: center; padding: 10px">
                        <i class="fa-solid fa-dumbbell" style="margin-right: 8px;"></i>
                        <div style="font-size:clamp(10px, 1.5vw, 12px); font-family:'Inter'; font-weight:bold">
                            Latihan
                        </div>
                    </a>
                </div>
            </div>

            <div style="display: flex; flex-direction: column;">
                <a target="_blank" href="https://github.com/dwmaf/Project-Pemweb" name="tombol merah"  style="margin-top:10px;margin-left:10px;width: clamp(40px, 10vw, 80px);height: clamp(40px, 10vw, 80px);border-radius: 100%;background-color: red;display: flex;justify-content: center;align-items: center; z-index: 2;position:relative"><i class="fa-solid fa-code" style="color:white; font-size: clamp(1.5rem, 2vw, 2rem);"></i></a>
                <div style="display: flex;  margin-top: 20px">
                    <div name="23" class="" style=" font-size: clamp(10px, 5vw, 25px); font-weight:bold; font-family:'Inter'; color: #3CC1CA;">23</div>
                    <div name="huruf jepang" style="font-family: 'Noto Serif JP'; font-size: clamp(80px, 15vw, 140px); font-weight:bold; color:#3CC1CA;margin-top:20px; margin-left:-9px; line-height:0">タ</div>
                </div>
            </div>
        
    </div>

</div>