<?php

    echo "文字列s1：";
    (String)$s1 = trim(fgets(STDIN));
    echo "文字列s2：";
    (String)$s2 = trim(fgets(STDIN));

    if (strcmp($s1, $s2) == 1) {
        echo "s2のほうが小さい。";
    } else if (strcmp($s1, $s2) == -1) {
        echo "s1のほうが小さい。";
    } else {
        echo "s1とs2は等しい。";
    }

?>