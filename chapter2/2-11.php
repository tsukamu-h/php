<?php
    $rand1 = rand(1, 9);
    $rand2 = rand(-9, -1);
    $rand3 = rand(10, 99);
    echo "３個の乱数を生成しました。\n";
    echo "１桁の正の整数：", $rand1, "\n";
    echo "１桁の負の整数：", $rand2, "\n";
    echo "２桁の正の整数：", $rand3, "\n";
?>