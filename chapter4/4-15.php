<?php
    echo "1からnまでの和を求めます。\n";
    
    do {
        echo "nの値：";
        $num = trim(fgets(STDIN));
    } while ($num <= 0);

    $sum = 0;
    $str = "";

    for ($i = 1 ; $i < $num; $i++) {
        $sum += $i;
        echo $i, " + ";
    }
    
    $sum += $num;
    echo $num, " = ", $sum;
?>