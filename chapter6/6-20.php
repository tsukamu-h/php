<?php
    echo "凹凸な２次元配列を作ります。\n";
    echo "行数：";
    $n = trim(fgets(STDIN));

    $t = array();

    echo "0行目の列数：";
    $t[0] = trim(fgets(STDIN));

    echo "1行目の列数：";
    $t[1] = trim(fgets(STDIN));
    echo "2行目の列数：";
    $t[2] = trim(fgets(STDIN));

    echo "各要素の値を入力せよ。\n";

    $a = array();
    $c = array();

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $t[$i]; $j++) {
            echo "c[", $i, "][", $j, "]：";
            $a[$j] = trim(fgets(STDIN));
        }
        $c[$i] = $a;
    }

    echo "配列cの各要素の値は次のようになっています。\n";

    // 配列cの各要素を順番に表示
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $t[$i]; $j++) {
            if($c[$i][$j] >= 10) {
                echo " ", $c[$i][$j];
            } else {
                echo "  ", $c[$i][$j];    
            }
        }
        echo "\n";
    }
?>