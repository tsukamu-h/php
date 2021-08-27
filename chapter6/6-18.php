<?php
    echo "行列aの要素の値を入力せよ。\n";

    $a = array();
    for ($i = 0; $i < 4; $i++) {
        $x = array();
        for ($j = 0; $j < 3; $j++) {
            echo "a[", $i, "][", $j, "]：";
            $x[$j] = trim(fgets(STDIN));
        }
        $a[$i] = $x;
    }

    echo "行列bの要素の値を入力せよ。\n";

    $b = array();
    for ($i = 0; $i < 3; $i++) {
        $y = array();
        for ($j = 0; $j < 4; $j++) {
            echo "b[", $i, "][", $j, "]：";
            $y[$j] = trim(fgets(STDIN));
        }
        $b[$i] = $y;
    }
    
    echo "行列aとbの積\n";

    for ($i = 0; $i < 4; $i++) {
        for ($j = 0; $j < 4; $j++) {
            $sum = 0;
            echo "   ";
            for ($k = 0; $k < 3; $k++) {
                $sum += $a[$i][$k] * $b[$k][$j];
            }
            echo $sum;
        }
        echo "\n";
    }
?>