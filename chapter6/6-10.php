<?php
    do {
        echo "要素数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0);

    $a = array();
    for ($i = 0; $i < $n; $i++) {
        $a[$i] = rand(1, 10);
        echo "a[", $i, "] = ", $a[$i], "\n";
    }
?>