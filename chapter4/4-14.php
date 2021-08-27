<?php
    echo "1からnまでの和を求めます。\n";
    
    do {
        echo "nの値：";
        $num = trim(fgets(STDIN));
    } while ($num <= 0);

    $sum = 0;

    for ($i = 1 ; $i <= $num; $i++) {
        $sum += $i;
    }
    
    echo "1から", $num, "までの和は", $sum, "です。";
?>