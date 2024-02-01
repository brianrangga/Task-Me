
<?php 

    function penumpang($orang){
        $awal = $orang / 7;
        $atas = ceil($awal);
        echo " Minibus yang diperlukan : ",$atas;
    }


    $orang = 10;
    penumpang($orang);

    
