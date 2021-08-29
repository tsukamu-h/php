<?php
    
    echo "実数：";
    $x = trim(fgets(STDIN));
    
    echo "絶対値：", abs($x), "\n";
    echo "平方根：", sqrt($x), "\n";
    echo "面  積：", pi() * $x * $x, "\n";

?>