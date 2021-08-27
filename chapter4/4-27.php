<?php
    echo "整数を加算します。\n";

    do {
        echo "何個加算しますか：";
        $num1 = trim(fgets(STDIN));
    } while ($num1 <= 1);

    $sum = 0;

    for ($i = 0; $i < $num1; $i++) {
        echo "整数：";
        $num2 = trim(fgets(STDIN));
        if ($sum + $num2 > 1000) {
            echo "合計が1,000を超えました。\n";
            echo "最後の計算は無視します。\n";
            break;
        }
        $sum += $num2;
    }

    $ave = (int)($sum / $i);

    echo "合計は", $sum, "です。\n";
    echo "平均は", $ave, "です。";
?>