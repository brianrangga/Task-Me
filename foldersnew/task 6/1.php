<?php
function kerja($golongan, $time){
    $gol = [
        '1' => 3000,
        '2' => 3500,
        '3' => 4000,
        '4' => 5000,
    ]; 
    if($time > 40){   
        $total = ($time - 40) * 1.5;
        $hsl = ($time * $gol[$golongan]) + ($total * $gol[$golongan]);
        echo "Gaji Karyawan :",$hsl;
    } else {
        $hsl = $time * $gol[$golongan];
        echo "Gaji Karyawan :", $hsl;
    }
}

$time = 41;
$golongan = '1'; 

kerja($golongan, $time);