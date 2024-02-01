<?php
function waktu($awal, $akhir){
    $a = explode(':', $awal);
    $b = explode(':', $akhir);
    
    $tawal = $a[0] * 60 + $a[1];
    $takhir = $b[0] * 60 + $b[1];
    
    $jmlh = $takhir - $tawal;
    
    $jam = floor($jmlh / 60);
    $menit = $jmlh % 60;

    echo "Waktu: $jam:$menit </br> Waktu : $jam jam $menit menit";
}

$awal = '10:35'; 
$akhir = '11:40';

waktu($awal, $akhir);