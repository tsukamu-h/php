<?php
    echo "整数A：";
    $a = trim(fgets(STDIN));
    echo "整数B：";
    $b = trim(fgets(STDIN));

    $dif = $a - $b;
    if ($dif < 0){
        $dif = -$dif;
    }

    if ($dif <= 10) {
        echo "それらの差は10以下です。";
    } else {
        echo "それらの差は11以上です。";
    }
?>