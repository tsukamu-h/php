<?php

    echo "文字列s1：";
    (String)$s1 = trim(fgets(STDIN));
    echo "文字列s2：";
    (String)$s2 = trim(fgets(STDIN));

    // 一致してしまう。
    if ($s1 === $s2) {
        echo "s1 == s2です。";
    } else {
        echo "s1 != s2です。";
    }

    echo "\n";

    if (strcmp($s1, $s2) == 0) {
        echo "s1とs2の中身は等しい。";
    } else {
        echo "s1とs2の中身は等しくない。";
    }    

?>