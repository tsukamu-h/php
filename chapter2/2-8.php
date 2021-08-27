<?php
    echo "xの値：";
    $x = trim(fgets(STDIN));
    echo "yの値：";
    $y = trim(fgets(STDIN));
    
    echo "合計は", ($x + $y), "です。\n";
    echo "平均は", ($x + $y) / 2, "です。";
?>