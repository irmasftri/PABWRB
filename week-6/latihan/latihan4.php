<?php
    echo "Bilangan prima 1-37 adalah : ";
    for($i=1;$i<=37;$i++){
        $bil=0;
        for($j=1; $j <= $i; $j++){
            if($i%$j == 0){
                $bil++;
            }
        } if($bil == 2){
            echo "<br>".$i." ";
        }
    }
?>
