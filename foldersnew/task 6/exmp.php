<?php
function bensin($bahan){
    $bensin = 10;
    $total = $bensin;
    for($i = 1; $i <= $bahan; $i++){
        $bensin *= 0.8;
        $total += $bensin;
       
    }echo "Bahan Bakar yang diperlukan : ".ceil($total). " Kg"  ; 
}

$bahan = 100;
bensin($bahan);