<?php
    do {
        echo "要素数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0);

    for ($i = 0; $i < $n; $i++) {
        echo "a[", $i, "] = ";
        $a[$i] = trim(fgets(STDIN));
    }

    echo "探す数値：";
    $u = trim(fgets(STDIN));

    // 前から探索
    for ($i = 0; $i < $n; $i++) {
        if ($u == $a[$i]) {
            echo "それはa[", $i, "]にあります。";
            break;
        } else if ($i == $n - 1) {
            echo "それはありません。";
        }
    }

    echo "\n";

    // 後ろから探索
    for ($i = $n - 1; $i >= 0; $i--) {
        if ($u == $a[$i]) {
            echo "それはa[", $i, "]にあります。";
            break;
        } else if ($i == 0) {
            echo "それはありません。";
        }
    }
?>