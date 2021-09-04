<?php

    function printDouble($x, $p, $w) {
        $str2 = sprintf("%%%d.%df", $p, $w);
        printf($str2, $x);
    }

    echo "実数値：";
    $s1 = trim(fgets(STDIN));
    echo "表示全桁数：";
    $s2 = trim(fgets(STDIN));
    echo "小数部桁数：";
    $s3 = trim(fgets(STDIN));

    printDouble($s1, $s2, $s3);
?>