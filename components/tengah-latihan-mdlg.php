<div class="mid-com mid-latihan">
    <div class="menu" >
        <div class="daftar-menu">
            <a href="index.php">
                <i class="fa-solid fa-home"></i>
            </a>
            <a href="kontak.php">
                <i class="fa-solid fa-address-book" ></i>
            </a>
            <a href="latihan.php">
                <i class="fa-solid fa-dumbbell" ></i>
            </a>
        </div>

        <div class="judul halaman">Latihan</div>

        <button class="btn-menu-lain">
            <i class="fa-solid fa-sliders"></i>
        </button>
    </div>

    <div class="form-container">
        <form action="" method="post" >
            <div id="NIM" class="input-container">
                <label class="label-kontak">Nilai Huruf</label>
                <input type="hidden" name="form_type" value="nilai_huruf">
                <input type="text" class="input-kontak" placeholder="Masukkan Nilai" name="angka" required>
            </div>
            <button type="submit">
                <i class="fa-solid fa-right-to-bracket"></i>
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

        <form action="" method="post" >
            <div class="input-container">
                <label class="label-kontak">Genap/Ganjil </label>
                <select name="genjilgenap" class="input-kontak" required>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
            </div>
            <input type="hidden" name="form_type" value="ganjil_genap">
            <button type="submit">
                <i class="fa-solid fa-right-to-bracket"></i>
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