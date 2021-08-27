<?php
    echo "整数値：";
    $stdin = trim(fgets(STDIN));
    $rand = rand($stdin - 5, $stdin + 5);
    echo "その値±5の乱数を生成しました。\n";
    echo "値は", $rand, "です。";
?>