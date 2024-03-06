<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilia huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500km.";
echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
}
echo "Nilai $nilai (Lulus) <br><br>";

// Tugas 4.6
$nilaiSiswa1 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa1);

$totalNilai = 0;
$jumlahNilai = count($nilaiSiswa1);

for ($i = 1; $i < $jumlahNilai - 2; $i++) {
    $totalNilai += $nilaiSiswa1[$i];
}

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan 
dua nilai terendah adalah: $totalNilai <br><br>";

// Tugas 4.7
$hargaProduk = 120000;
$diskon = 0.20; 

if ($hargaProduk > 100000) {
    $hargaSetelahDiskon = $hargaProduk - ($hargaProduk * $diskon);
    echo "Harga Produk Setelah Diskon: $hargaSetelahDiskon";
} else {
    echo "Harga Produk: $hargaProduk";
}
echo "<br><br>";

// Tugas 4.8
$skorPemain = 750; 

echo "Total skor pemain adalah: $skorPemain<br>";

if ($skorPemain > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>