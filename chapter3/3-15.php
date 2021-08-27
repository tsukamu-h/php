<?php
    echo "整数a：";
    $a = trim(fgets(STDIN));
    echo "整数b：";
    $b = trim(fgets(STDIN));
    echo "整数c：";
    $c = trim(fgets(STDIN));

    if ($a > $b) {
        echo "最小値は", ($b > $c ? $c : $b), "です。";
    } else {
        echo "最小値は", ($a > $c ? $c : $a), "です。";
    }
?>