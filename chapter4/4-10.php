<?php
    do {
        echo "正の整数値：";
        $num = trim(fgets(STDIN));
    } while ($num <= 0);
    
    $sum = 1;
    $count = 1;
    while($count <= $num) {
        $sum *= $count++;
    }
    echo "1から", $num, "までの積は", $sum, "です。";
?>