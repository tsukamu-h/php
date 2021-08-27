<?php
    echo "1からxまでの和を求めます。\n";
    echo "xの値：";
    $n = trim(fgets(STDIN));

    // 和を求めるメソッド
    function sumUp(int $n) {
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }
        return $sum;
    }
    
    
    echo "1から", $n, "までの和は", sumUp($n), "です。";

?>