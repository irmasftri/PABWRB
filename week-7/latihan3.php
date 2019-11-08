<?php
    function faktorial($bil){
        $hasil=1;
        for($i=$bil;$i>0;$i--){
            $hasil=$hasil * $i;
        }
        echo "Faktorial dari $bil adalah $hasil";
    }
    $bil = 4;
    faktorial($bil);
?>