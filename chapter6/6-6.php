<?php
    do {
        echo "要素数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0);
    
    $a = array();

    for ($i = 0; $i < $n; $i++) {
        echo "a[", $i, "] = ";
        $a[$i] = trim(fgets(STDIN));
    }

    echo "a = {";

    for ($i = 1; $i <= $n; $i++) {
        if($i == $n) {
            echo $a[$i - 1], "}";
            break;
        }
        echo $a[$i - 1], ", ";
    }
?>