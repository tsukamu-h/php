<?php
    function absolute($x) {
        return $x >= 0 ? $x : -$x; 
    }
    
    echo "int   型定数aの値：";
    $a = (int) trim(fgets(STDIN));
    echo "long  型配列bの値：";
    $b = (int) trim(fgets(STDIN));
    echo "float 型配列cの値：";
    $c = (float) trim(fgets(STDIN));
    echo "double型配列dの値：";
    $d = (double) trim(fgets(STDIN));

    printf("aの絶対値は%dです。\n", absolute($a));
    printf("bの絶対値は%dです。\n", absolute($b));
    printf("cの絶対値は%.1fです。\n", absolute($c));
    printf("dの絶対値は%.1fです。\n", absolute($d));
?>