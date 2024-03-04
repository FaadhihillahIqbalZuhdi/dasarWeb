<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Diketahui a = 10 dan b = 5 <br>";
echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Hasil Pangkat: {$pangkat} <br>";
echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama: {$hasilSama} <br>";
echo "Hasil Tidak Sama: {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil: {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar: {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasi And: {$hasilAnd} <br>";
echo "Hasi Or: {$hasilOr} <br>";
echo "Hasi Not A: {$hasilNotA} <br>";
echo "Hasi Not B: {$hasilNotB} <br>";
echo "<br>";

$totalJumlah = $a += $b;
$totalKurang = $a -= $b;
$totalKali = $a *= $b;
$totalBagi = $a /= $b;
$totalSisaBagi = $a %= $b;

echo "Total Jumlah: {$totalJumlah} <br>";
echo "Total Kurang: {$totalKurang} <br>";
echo "Total Kali: {$totalKali} <br>";
echo "Total Bagi: {$totalBagi} <br>";
echo "Total Sisa Bagi: {$totalSisaBagi} <br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik: {$hasilIdentik} <br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik}";
echo "<br><br>";

// Tugas
$jumlahKursi = 45;
$kursiTerpakai = 28;
$kursiTersedia = $jumlahKursi - $kursiTerpakai;
$persenKursiTersedia = $kursiTersedia / $jumlahKursi * 100;

echo "Kursi yang tersedia: {$kursiTersedia} ({$persenKursiTersedia}%)";
?>