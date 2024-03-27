<?php
// Fungsi untuk menghitung skor rata-rata tim
function hitungRataRata($skor) {
    return array_sum($skor) / count($skor);
}

// Fungsi untuk menentukan pemenang kompetisi
function tentukanPemenang($skorLumbaLumba, $skorKoala) {
    $rataRataLumbaLumba = hitungRataRata($skorLumbaLumba);
    $rataRataKoala = hitungRataRata($skorKoala);
    
    // Skor minimum
    $skorMinimum = 100;

    // Cek skor rata-rata dan skor minimum
    if ($rataRataLumbaLumba > $rataRataKoala && $rataRataLumbaLumba >= $skorMinimum) {
        return "Lumba-lumba";
    } elseif ($rataRataKoala > $rataRataLumbaLumba && $rataRataKoala >= $skorMinimum) {
        return "Koala";
    } elseif ($rataRataLumbaLumba == $rataRataKoala && $rataRataLumbaLumba >= $skorMinimum && $rataRataKoala >= $skorMinimum) {
        return "Seri";
    } else {
        return "Tidak ada pemenang";
    }
}

// Data uji
$data1LumbaLumba = [96, 108, 89];
$data1Koala = [88, 91, 110];

$dataBonus1LumbaLumba = [97, 112, 101];
$dataBonus1Koala = [109, 95, 123];

$dataBonus2LumbaLumba = [97, 112, 101];
$dataBonus2Koala = [109, 95, 106];

// Tampilkan hasil
echo "Hasil Data 1: " . tentukanPemenang($data1LumbaLumba, $data1Koala) . "\n";
echo "Hasil Data Bonus 1: " . tentukanPemenang($dataBonus1LumbaLumba, $dataBonus1Koala) . "\n";
echo "Hasil Data Bonus 2: " . tentukanPemenang($dataBonus2LumbaLumba, $dataBonus2Koala) . "\n";
?>
