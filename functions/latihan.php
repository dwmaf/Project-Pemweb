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
    echo "<div style='margin: 0 0 20px 0; color: white;'>";
    echo "Nilai angka: $nilai";
    echo "<br>";
    echo "Nilai huruf: $nilaiHuruf";
    echo "<br>";
    echo "</div>";
}
?>

<?php
function ganjil($awal, $akhir)
{
    $i = $awal;
    echo "<div style='color: white;'>";
    while ($i < $akhir) {
        echo "$i ";
        $i += 2;
    }
    echo "</div>";
}

function genap($awal, $akhir)
{
    $i = $awal;
    echo "<div style=' color: white;'>";
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