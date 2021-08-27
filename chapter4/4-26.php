<?php
    echo "整数を加算します。\n";

    do {
        echo "何個加算しますか：";
        $num1 = trim(fgets(STDIN));
    } while ($num1 <= 1);

    $sum = 0;

    for ($i = 0; $i < $num1; $i++) {
        echo "整数（0で終了）：";
        $num2 = trim(fgets(STDIN));
        if ($num2 == 0) {
            break;
        }
        $sum += $num2;
    }

    $ave = (int)($sum / $i);

    echo "合計は", $sum, "です。\n";
    echo "平均は", $ave, "です。";
?>