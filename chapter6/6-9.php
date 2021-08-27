<?php
    do {
        echo "要素数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0);

    $a = array();

    for ($i = 0; $i < $n; $i++) {
        echo "a[", $i, "] = ";
        $array[$i] = trim(fgets(STDIN));
    }

    $sum = 0;

    // 回答見る前のコード
    /*for ($i = 0; $i < $n; $i++) {
        $sum += $array[$i];
    }*/

    // 拡張for文（問題集参照）
    foreach ($array as $i) {
        $sum += $i;
    }

    $ave = $sum / $n;

    echo "全要素の合計は", $sum, "です。\n";
    echo "全要素の平均は", $ave, "です。";
?>