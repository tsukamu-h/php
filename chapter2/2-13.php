<?php
    function randomFloat($min = 0, $max = 1) {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }

    $rand1 = randomFloat();
    $rand2 = randomFloat(0, 10);
    $rand3 = randomFloat(-1, 1);
    echo "３個の乱数を生成しました。\n";
    echo " 0.0以上 1.0未満：", $rand1, "\n";
    echo " 0.0以上10.0未満：", $rand2, "\n";
    echo "-1.0以上 1.0未満：", $rand3, "\n";
?>