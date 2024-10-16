<div class="mid-com " style="  
    background-size: 100% 100%; background-repeat: no-repeat; height: 886px; 
    display: flex; flex-direction: column; 
    justify-content: space-between; min-width:50%">
    <div style="display: flex; justify-content: space-between;">
        <div style="display: flex; justify-content: space-between;align-items: center;
        padding:20px; 
         margin-left:30px; 
         width:clamp(150px, 19vw, 200px);
         height:clamp(60px, 7vw, 70px);
         margin-top:40px;
         
        background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); border-radius:50px;">
            <a href="index.php">
                <i class="fa-solid fa-home" style=" font-size: 20px; color:white"></i>
            </a>
            <a href="kontak.php">
                <i class="fa-solid fa-address-book" style=" font-size: 20px;color:white"></i>
            </a>
            <a href="latihan.php">
                <i class="fa-solid fa-dumbbell" style=" font-size: 20px;color:white"></i>
            </a>
        </div>

        <div name="judul halaman" style="font-family: 'Bento'; font-size:clamp(30px, 4vw, 40px); background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); 
        border-radius:50px; color:white; 
        margin-top:40px; padding:10px; height:clamp(60px, 7vw, 70px);
        display:flex; align-items:center; justify-content:center">Home</div>

        <button class="btn btn-menu-lain" style="width: clamp(60px, 8vw, 90px); height: clamp(60px, 8vw, 90px); 
        background-color:#414144; border-radius:100%; display: flex;justify-content: center;align-items: center; 
        margin-top:20px; margin-right:clamp(10px, 0vw, 0px)">
        <i class="fa-solid fa-sliders" style="color:white; font-size:clamp(25px, 3.5vw, 35px);"></i></button>
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
    height: clamp(200px, 33vw, 330px); 
    width: clamp(275px, 45vw, 453px); 
    margin-bottom:20px; margin-left:20px;
    display: flex; justify-content:space-between;
    padding: clamp(20px, 3vw, 40px) clamp(20px, 5vw, 40px);
    ">
        
            <div style="display: flex; flex-direction: column; justify-content:space-between; margin-right: clamp(10px, 3vw, 30px); ">
                <div>
                    <div class="bento" style="font-family: 'Bento'; font-size:clamp(60px, 9vw, 90px); line-height:1">Porto</div>
                    <div class="bento" style="font-family: 'Bento'; font-size:clamp(60px, 9vw, 90px); line-height: 0; margin-top:clamp(8px, 2vw, 15px)">folio</div>
                </div>
                <div style="display: flex; ">
                    <a href="kontak.php" class="btn " style="background-color: #ECEEF9; border-radius: 23px; display: flex; align-items: center; padding: clamp(5px, 2vw, 10px); margin-right: clamp(4px, 2vw, 14px)">
                        <i class="fa-regular fa-address-book" style="margin-right: 8px; font-size: clamp(10px, 1.2vw, 12px);"></i>
                        <div style="font-size: clamp(10px, 1.2vw, 12px); font-family:'Inter'; font-weight:bold">
                            Kontak
                        </div>
                    </a>

                    <a href="latihan.php" class="btn " style="background-color: #ECEEF9; border-radius: 23px; display: flex; align-items: center; padding: clamp(5px, 2vw, 10px)">
                        <i class="fa-solid fa-dumbbell" style="margin-right: 8px; font-size: clamp(10px, 1.2vw, 12px);"></i>
                        <div style="font-size: clamp(10px, 1.2vw, 12px); font-family:'Inter'; font-weight:bold">
                            Latihan
                        </div>
                    </a>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; justify-content:space-between">
                <a target="_blank" href="https://github.com/dwmaf/Project-Pemweb" name="tombol merah" class="btn" style="
                margin-left:clamp(0px, 2vw, 20px);
                width: clamp(55px, 8vw, 80px); height: clamp(55px, 8vw, 80px);
                border-radius: 100%;
                background-color: red;display: flex;justify-content: center;
                align-items: center; z-index: 2;position:relative;
                
                ">
                <i class="fa-solid fa-code " style="color:white; font-size: clamp(10px, 4vw, 40px);"></i></a>
                <div style="display: flex; justify-content:space-between">
                    <div name="23" class="" style=" font-size: clamp(20px, 4vw, 40px); font-weight:bold; font-family:'Inter'; color: #3CC1CA; ">23</div>
                    <div name="huruf jepang" style="font-family: 'Noto Serif JP'; font-size:clamp(70px, 14vw, 140px); font-weight:bold; color:#3CC1CA;; margin-top:-60px; margin-left:clamp(-10px, -2vw, -20px)">タ</div>
                </div>
            </div>
        
    </div>

</div>