<div style="  background-image: url('assets/tengah-with-image.png');
    background-size: 100% 100%; background-repeat: no-repeat; height: 886px; display: flex; flex-direction: column; justify-content: space-between; min-width:50%">
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
        <div name="judul halaman" style="font-family: 'Bento'; font-size:40px; background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); border-radius:50px; color:white; margin-top:40px; padding:20px; height:70px; display:flex; align-items:center; justify-content:center">Latihan</div>
        <div class="btn" style="width: 90px; height: 90px; background-color:#414144; border-radius:100%; display: flex;justify-content: center;align-items: center; margin-top:20px;"><i class="fa-solid fa-sliders" style="color:white; font-size:35px;"></i></div>
    </div>
    <div style="background-color: rgb(0,0,0,0.5); padding: 20px; max-width:70%;  border-radius:55px; backdrop-filter:blur(7px); margin-bottom:60%; margin-left:30px;">
        <form action="" method="post" style="margin:20px; display:flex; ">
            <div id="NIM" style="position: relative; padding:10px; border: 1px solid white; border-radius: 15px; display: inline-block; color: white; width: 70%;">
                <label style="position: absolute;top: -10px;left: 10px;background-color: #414144;color: white;padding: 0 5px;font-size: 12px; border-radius:15px">Nilai Huruf</label>
                <input type="hidden" name="form_type" value="nilai_huruf">
                <input type="text" style="outline: none; background:none; border:none;" placeholder="Masukkan Nilai" name="angka" required>
            </div>
            <button type="submit" style="background: none; border: 1px solid white; border-radius:15px; padding:10px; margin-left:10px; display: flex; justify-content: center; align-items: center;">
                <i style="color:white; font-size:25px" class="fa-solid fa-right-to-bracket"></i>
            </button>

        </form>
        <?php
        function dapatinnilai($score)
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
            $nilaiHuruf = dapatinnilai($nilai);
            echo "<div style='margin-left: 20px; color: white;'>";
            echo "Nilai angka: $nilai";
            echo "<br>";
            echo "Nilai huruf: $nilaiHuruf";
            echo "<br>";
            echo "</div>";
        }
        ?>

        <form action="" method="post" style="margin: 20px; display:flex;">
            <div style="position: relative;padding-right:10px; border: 1px solid white; border-radius: 15px; display: inline-block; color: white; width: 70%;">
                <label style="position: absolute; top: -10px; left: 10px; background: #414144; color: white; padding: 0 5px; font-size: 12px; border-radius:15px">Genap/Ganjil </label>
                <select name="genjilgenap" class="custom-select" required>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
            </div>
            <input type="hidden" name="form_type" value="ganjil_genap">
            <button type="submit" style="background: none; border: 1px solid white; border-radius:15px; padding:10px; margin-left:10px; display: flex; justify-content: center; align-items: center;">
                <i style="color:white; font-size:25px" class="fa-solid fa-right-to-bracket"></i>
            </button>
        </form>

        <?php
        function ganjil($awal, $akhir)
        {
            $i = $awal;
            echo "<div style='margin-left: 20px; color: white;'>";
            while ($i < $akhir) {
                echo "$i ";
                $i += 2;
            }
            echo "</div>";
        }

        function genap($awal, $akhir)
        {
            $i = $awal;
            echo "<div style='margin-left: 20px; color: white;'>";
            while ($i >= $akhir) {
                echo "$i ";
                $i -= 2;
            }
            echo "</div>";
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['form_type'] === 'ganjil_genap') {
            $tipe = $_POST['genjilgenap'];
            if ($tipe === "Ganjil") {
                ganjil(1, 30);
            } elseif ($tipe === "Genap") {
                genap(20, 0);
            }
        }
        ?>
    </div>

</div>