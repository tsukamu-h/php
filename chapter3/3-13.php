<?php
    echo "整数a：";
    $a = trim(fgets(STDIN));
    echo "整数b：";
    $b = trim(fgets(STDIN));

    $dif = $a - $b;
    if ($dif < 0){
        $dif = -$dif;
    }

    echo "それらの差は", $dif, "です。";
?>