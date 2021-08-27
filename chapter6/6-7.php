<?php
    do {
        echo "人数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0);
    
    echo "点数を入力せよ。\n";

    $a = array();

    for ($i = 0; $i < $n; $i++) {
        echo ($i + 1), "番の点数：";
        $a[$i] = trim(fgets(STDIN));
    }

    $sum = 0;
    $ave = 0;
    $max = 0;
    $min = 100;

    for ($i = 0; $i < $n; $i++) {
        $sum += $a[$i];
        if ($max < $a[$i]) {
            $max = $a[$i];
        }
        
        if ($min > $a[$i]) {
            $min = $a[$i];
        }
    }

    $ave = $sum / $n;

    echo "合計点は", $sum, "点です。\n";
    echo "平均点は", $ave, "点です。\n";
    echo "最高点は", $max, "点です。\n";
    echo "最低点は", $min, "点です。\n";
?>