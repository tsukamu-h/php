<?php
    $a = (float)0.0;
    $b = (float)0.0;

    echo "    x        xの２乗";
    echo "---------------------\n";
    for ($i = 0; $i < 1000; $i++) {
        $a += (float)0.001;
        $b = $a * $a;
        printf("%.3f   %.7f\n", $a, $b);
    }
?>