<?php
// Data 1
// Simpan massa dan tinggi badan Mark dan John dalam variabel
$massa_mark1 = 78;  // Massa Mark dalam kg
$tinggi_mark1 = 1.69;  // Tinggi Mark dalam meter

$massa_john1 = 92;  // Massa John dalam kg
$tinggi_john1 = 1.95;  // Tinggi John dalam meter

// Hitung BMI untuk Mark dan John pada Data 1
$bmi_mark1 = $massa_mark1 / ($tinggi_mark1 ** 2);
$bmi_john1 = $massa_john1 / ($tinggi_john1 ** 2);

// Tentukan apakah Mark memiliki BMI lebih tinggi dari John pada Data 1
$markHigherBMI1 = $bmi_mark1 > $bmi_john1;

// Data 2
// Simpan massa dan tinggi badan Mark dan John dalam variabel
$massa_mark2 = 95;  // Massa Mark dalam kg
$tinggi_mark2 = 1.88;  // Tinggi Mark dalam meter

$massa_john2 = 85;  // Massa John dalam kg
$tinggi_john2 = 1.76;  // Tinggi John dalam meter

// Hitung BMI untuk Mark dan John pada Data 2
$bmi_mark2 = $massa_mark2 / ($tinggi_mark2 ** 2);
$bmi_john2 = $massa_john2 / ($tinggi_john2 ** 2);

// Tentukan apakah Mark memiliki BMI lebih tinggi dari John pada Data 2
$markHigherBMI2 = $bmi_mark2 > $bmi_john2;

// Tampilkan hasil
echo "Data 1:\n";
echo "Apakah Mark memiliki BMI lebih tinggi dari John? \n" . ($markHigherBMI1 ? "Ya" : "Tidak") . "\n";

echo "\nData 2:\n";
echo "Apakah Mark memiliki BMI lebih tinggi dari John? \n" . ($markHigherBMI2 ? "Ya" : "Tidak") . "\n";
?>
