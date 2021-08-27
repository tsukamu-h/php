<?php
    echo "乱数を生成します。\n";
    echo "下限値：";
    $min = trim(fgets(STDIN));
    echo "上限値：";
    $max = trim(fgets(STDIN));
    echo "生成した乱数は", random($min, $max), "です。";

    // 乱数を生成して返すメソッド
    function random(int $a, int $b) {
        if ($a > $b) {
            return $a;
        }
        return rand($a, $b);
    }
?>