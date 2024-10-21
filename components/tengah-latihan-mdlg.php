<div class="mid-com" style="  
    background-size: 100% 100%; background-repeat: no-repeat; height: 886px; display: flex; flex-direction: column; justify-content: space-between; min-width:50%">
    <div class="menu" style="display: flex; position:relative">
        <div style="display: flex; justify-content: space-between;align-items: center;
        padding:20px; 
         margin-left:clamp(15px, 2vw, 30px); 
         width:clamp(140px, 19vw, 200px);
         height:clamp(50px, 7vw, 70px);
         margin-top:clamp(10px, 3vw,40px);
         
        background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); border-radius:50px;">
            <a href="index.php">
                <i class="fa-solid fa-home" style=" font-size: clamp(15px, 1.7vw,20px); color:white"></i>
            </a>
            <a href="kontak.php">
                <i class="fa-solid fa-address-book" style=" font-size: clamp(15px, 1.7vw,20px);color:white"></i>
            </a>
            <a href="latihan.php">
                <i class="fa-solid fa-dumbbell" style=" font-size: clamp(15px, 1.7vw,20px);color:white"></i>
            </a>
        </div>

        <div name="judul halaman" style="font-family: 'Bento'; font-size:clamp(20px, 3.5vw, 40px); background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); 
        border-radius:50px; color:white; letter-spacing: 1px; margin-left:clamp(10px, 3vw,40px);
        margin-top:clamp(10px, 3vw,40px); padding:10px; height:clamp(50px, 7vw, 70px);
        display:flex; align-items:center; justify-content:center">Latihan</div>

        <button class="btn-menu-lain" style="width: clamp(60px, 8vw, 90px); height: clamp(60px, 8vw, 90px); 
        background-color:#414144; border-radius:100%; display: flex;justify-content: center;align-items: center; 
         border:none; ">
            <i class="fa-solid fa-sliders" style="color:white; font-size:clamp(25px, 3.5vw, 35px);"></i>
        </button>
    </div>

    <div style="background-color: rgb(0,0,0,0.5); padding: clamp(20px, 3vw, 40px); max-width:390px;  border-radius:clamp(40px, 4.5vw,55px); backdrop-filter:blur(7px); margin-bottom:50%; margin-left:clamp(10px, 2vw, 30px); margin-right:10px">
        <form action="" method="post" style="display:flex; ">
            <div id="NIM" class="container-kontak">
                <label class="label-kontak">Nilai Huruf</label>
                <input type="hidden" name="form_type" value="nilai_huruf">
                <input type="text" class="input-kontak" placeholder="Masukkan Nilai" name="angka" required>
            </div>
            <button type="submit" style="background: none; border: 1px solid white; border-radius:15px; padding:10px; margin:0 0 20px 10px; display: flex; align-items: center;">
                <i style="color:white; font-size:25px" class="fa-solid fa-right-to-bracket"></i>
            </button>

        </form>
        <?php
        function dapatinnilaimdlg($score)
        {
            if ($score >= 80) {
                return 'A';
            } elseif ($score >= 70) {
                return 'B';
            } elseif ($score >= 60) {
                return 'C';
            } elseif ($score >= 50) {
                return 'D';
            } else {
                return 'E';
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['form_type'] === 'nilai_huruf') {
            $nilai = $_POST['angka'];
            $nilaiHuruf = dapatinnilaimdlg($nilai);
            echo "<div style='margin:0 0 20px 0; color: white;'>";
            echo "Nilai angka: $nilai";
            echo "<br>";
            echo "Nilai huruf: $nilaiHuruf";
            echo "<br>";
            echo "</div>";
        }
        ?>

        <form action="" method="post" style="display:flex;">
            <div class="container-kontak">
                <label class="label-kontak">Genap/Ganjil </label>
                <select name="genjilgenap" class="input-kontak" required>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
            </div>
            <input type="hidden" name="form_type" value="ganjil_genap">
            <button type="submit" style="background: none; border: 1px solid white; border-radius:15px; padding:10px; margin:0 0 20px 10px; display: flex; align-items: center;">
                <i style="color:white; font-size:25px" class="fa-solid fa-right-to-bracket"></i>
            </button>
        </form>

        <?php
        function ganjilmdlg($awal, $akhir)
        {
            $i = $awal;
            echo "<div style='color: white;'>";
            while ($i < $akhir) {
                echo "$i ";
                $i += 2;
            }
            echo "</div>";
        }

        function genapmdlg($awal, $akhir)
        {
            $i = $awal;
            echo "<div style='color: white;'>";
            while ($i >= $akhir) {
                echo "$i ";
                $i -= 2;
            }
            echo "</div>";
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['form_type'] === 'ganjil_genap') {
            $tipe = $_POST['genjilgenap'];
            if ($tipe === "Ganjil") {
                ganjilmdlg(1, 30);
            } elseif ($tipe === "Genap") {
                genapmdlg(20, 0);
            }
        }
        ?>
    </div>

</div>