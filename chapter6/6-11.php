<?php
    do {
        echo "要素数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0);

    $a = array();

    for ($i = 0; $i < $n; $i++) {
        $t = rand(1, 10);
        if ($i == 0) {
            $array[0] = $t;
        } else if ($t != $array[$i - 1]) {
            $array[$i] = $t;
        } else {
            $i--;
            continue;
        }
        echo "a[", $i, "] = ", $array[$i], "\n";
    }
?>