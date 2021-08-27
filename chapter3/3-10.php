<?php
    echo "整数値：";
    $stdin = trim(fgets(STDIN));
    if ($stdin > 0){
        if ($stdin % 3 == 0) {
            echo "その値は3で割り切れます。";
        } else if($stdin % 3 == 1){
            echo "その値を3で割った余りは1です。";
        } else {
            echo "その値を3で割った余りは2です。";
        }
    } else {
        echo "正でない値が入力されました。";
    }
?>