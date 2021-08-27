<?php
    do {
        echo "要素数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0 || $n >10);

    $a = array();

    for ($i = 0; $i < $n; $i++) {
        $t = rand(1, 10);
        $a[$i] = $t;

        for ($j = 0; $j < $i; $j++) {
            if ($t == $a[$j]) {
                $i--;
                continue 2;
            }    
        }
        echo "a[", $i, "] = ", $a[$i], "\n";
    }
?>