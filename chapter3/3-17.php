<?php
    echo "整数a：";
    $a = trim(fgets(STDIN));
    echo "整数b：";
    $b = trim(fgets(STDIN));
    
    $min;
    $max;

    if($a == $b) {
        echo "二つの値は同じです。";
    } else {
        if ($a > $b) {
            $min = $b;
            $max = $a;
        } else {
            $min = $a;
            $max = $b;
        }
        echo "小さい方の値は", $min, "です。";
        echo "\n大きい方の値は", $max, "です。";
    }
?>