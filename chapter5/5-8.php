<?php
    // 表示通りにできない
    $a = (float)0.0;
    $b = 0;

    echo "  float        int\n";
    echo "---------------------\n";
    for ($i = 0; $i < 1000; $i++) {
        $a += (float)0.001;
        $b += 1;
        printf("%.7f   %.7f\n", $a, (float)($b / 1000));
    }
?>