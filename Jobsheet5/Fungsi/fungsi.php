<?php

// function perkenalan($nama, $salam="Assalamualaikum") {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."</br>";
//     echo "Senang berkenalan dengan Anda</br>";
// }

//memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana","Hallo");

// echo "<br>";

// $saya = "Elok";
// $ucapSalam = "Selamat Pagi";

//memanggil lagi tanpa mengisi parameter salam
// perkenalan($saya);

// echo "<br>";

// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Saya berusia ".hitungUmur(1988,2023)." tahun<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan ("Elok");
?>
