<?php
    do {
        echo "要素数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0);

    $a = array();
    $b = array();

    for ($i = 0; $i < $n; $i++) {
        echo "a[", $i, "] = ";
        $a[$i] = trim(fgets(STDIN));
    }

    for ($i = 0; $i < $n; $i++) {
        $b[$i] = $a[$n - ($i + 1)];
    }

    echo "aの全要素を逆順にbにコピーしました。\n";

    for ($i = 0; $i < $n; $i++) {
        echo "b[", $i, "] = ", $b[$i], "\n";
    }    

?>