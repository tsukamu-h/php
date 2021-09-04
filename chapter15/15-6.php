<?php

    echo "文字列s1：";
    $s1 = trim(fgets(STDIN));
    echo "文字列s2：";
    $s2 = trim(fgets(STDIN));

    if (strpos($s1, $s2) === false) {
        echo "s1の中にs2が含まれていません。";
    } else {
        echo $s1, "\n";
        for ($i = 0; $i < strpos($s1, $s2); $i++) {
            echo " ";
        }
        echo $s2;
    }

?>