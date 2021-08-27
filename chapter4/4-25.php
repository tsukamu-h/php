<?php
    do {
        echo "2以上の整数値：";
        $num = trim(fgets(STDIN));
    } while ($num <= 1);

    $flag = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $flag = false;
            echo "それは素数ではありません。";
            break;
        }
    }

    if ($flag) {
        echo "それは素数です。";
    }
?>