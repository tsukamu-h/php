<?php

    function printStringArray($a) {
        for ($i = 0; $i < count($a); $i++) {
            for ($j = 0; $j < strlen($a[$i]); $j++) {
                echo $a[$i][$j];
            }
            echo "\n";
        }
    }

    echo "文字列の個数：";
    $str_array = trim(fgets(STDIN));
    $sx = array();

    for ($i = 0; $i < $str_array; $i++) {
        echo "sx[", $i, "] = ";
        $sx[$i] = trim(fgets(STDIN));
    }

    printStringArray($sx);

?>