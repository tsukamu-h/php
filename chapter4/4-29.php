<?php
    echo "整数を加算します。\n";

    $count = 0;
    $sum = 0;

    for ($i = 1; $i <= 10; $i++) {
        echo "■第", $i, "グループ\n";
        for ($j = 1; $j <= 5; $j++) {
            echo "整数：";
            $num = trim(fgets(STDIN));
            if($num == 99999 || $num == 88888) {
                break;
            }
            $sum += $num;
        }
        
        if ($num == 99999) {
            break;
        }
    }

    echo "\n合計は", $sum, "です。";
?>