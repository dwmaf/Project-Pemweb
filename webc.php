<!DOCTYPE html>
<html>

<head>
    <title>Latihan PemWeb</title>
    <!-- <link rel="stylesheet" type="text/css" href="/Pemweb/styles.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <table width="100%">
        <tr id="header" style="text-align: center" class="bg-secondary">
            <th colspan="3" style="padding: 50px 0; color: white">
                <h1>JUDUL WEBSITE</h1>
            </th>
        </tr>

        <tr style="text-align: center">
            <th colspan="3" style="padding: 10px 0;">
                <h3 style="display: inline-block; margin-right: 20px;"><a href="index.php">HOME</a> </h3>
                <h3 style="display: inline-block; margin-right: 20px"><a href="kontak.php">KONTAK</a></h3>
                <h3 style="display: inline-block; margin-right: 20px;"><a href="webc.php">LATIHAN</a> </h3>
            </th>
        </tr>
        <tr>
            <td bgcolor="#92d1c0" style="vertical-align: top; padding-left: 20px">
                <p style="font-weight: bold">Menu Kiri</p>
                <ul>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ul>
            </td>

            <td width="50%" style="padding: 20px">
                <p style="font-weight: bold">Nilai huruf</p>
                <form action="" method="post">
                    <input type="number" name="angka" required/>
                    <input type="hidden" name="form_type" value="nilai_huruf">
                    <button type="submit">Kirim</button>
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
                    echo "Nilai angka: $nilai";
                    echo "<br>";
                    echo "Nilai huruf: $nilaiHuruf";
                    echo "<br>";
                    
                }
                ?>

                <p style="font-weight: bold">Ganjil/Genap</p>
                <form action="" method="post">
                    <input type="radio" id="ganjil" name="kelamin" value="Ganjil" required/>
                    <label for="ganjil">Ganjil</label><br />
                    <input type="radio" id="genap" name="kelamin" value="Genap" required/>
                    <label for="genap">Genap</label><br />
                    <input type="hidden" name="form_type" value="ganjil_genap">
                    <button type="submit">Kirim</button>
                </form>

                <?php
                function ganjil($awal, $akhir)
                {
                    if ($awal % 2 == 0) {
                        echo "Bukan bilangan ganjil";
                    } else {
                        $i = $awal;
                        while ($i < $akhir) {
                            echo "$i ";
                            $i += 2;
                        }
                    }
                    echo "<br>";
                }

                function genap($awal, $akhir)
                {
                    if ($awal % 2 != 0) {
                        echo "Bukan bilangan genap";
                    } else {
                        $i = $awal;
                        while ($i >= $akhir) {
                            echo "$i ";
                            $i -= 2;
                        }
                    }
                    echo "<br>";
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['form_type'] === 'ganjil_genap') {
                    $tipe = $_POST['kelamin'];
                    if ($tipe === "Ganjil") {
                        ganjil(1, 20);
                    } elseif ($tipe === "Genap") {
                        genap(20, 0);
                    }
                }
                ?>

            </td>

            <td bgcolor="#9bcaf6" style="vertical-align: top">
                <p style="font-weight: bold; padding-left: 20px">Menu Kanan</p>
                <ol style="padding-left: 60px">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ol>
            </td>
        </tr>
        <tr>
            <td
                id="footer"
                colspan="3">
                FOOTER
            </td>
        </tr>
    </table>


</body>

</html>