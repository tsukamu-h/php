<?php
    echo "三角形の面積を求めます。\n";
    echo "底辺：";
    $x = trim(fgets(STDIN));
    echo "高さ：";
    $y = trim(fgets(STDIN));
    
    echo "面積は", ($x * $y) / 2, "です。";
?>