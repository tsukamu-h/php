<?php
    echo "実数a：";
    $a = trim(fgets(STDIN));
    echo "実数b：";
    $b = trim(fgets(STDIN));
    if ($a > $b){
        echo "大きい方の値は", $a, "です。";
    } else {
        echo "大きい方の値は", $b, "です。";
    }

    // 条件演算子
    $max = $a > $b ? $a : $b;
    echo "\n大きい方の値は", $max, "です。";
?>