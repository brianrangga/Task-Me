<?php 
function waktu($detik){
    $jam = floor($detik / 3600);
    $sisajam = $detik % 3600;
    $menit = floor($sisajam / 60);
    $sisamenit = $sisajam % 60;

    echo "Waktu: $detik detik di konvrensikan <br>
    $jam:$menit:$sisamenit <br>
    $jam jam $menit menit $sisamenit detik";
}

$detik = 3665;
waktu($detik);