<?php
    echo "整数a：";
    $a = trim(fgets(STDIN));
    echo "整数b：";
    $b = trim(fgets(STDIN));
    echo "整数c：";
    $c = trim(fgets(STDIN));

    $mid;

    if ($a >= $b) {
        if($a <= $c) {
            $mid = $a;
        } else if ($b >= $c) {
            $mid = $b;
        }
    } else {
        if($b <= $c) {
            $mid = $b;
        } else if ($a >= $c) {
            $mid = $a;
        }
        echo "中央値は", $mid, "です。";
    }
?>