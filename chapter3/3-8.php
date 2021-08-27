<?php
    echo "整数値：";
    $stdin = trim(fgets(STDIN));
    if ($stdin > 0){
        if ($stdin % 5 == 0) {
            echo "その値は５で割り切れます。";
        } else {
            echo "その値は５で割り切れません。";
        }
    } else {
        echo "正でない値が入力されました。";
    }
?>