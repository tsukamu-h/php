<?php
    // メソッドまとめた
    // 結果が同じになっただけ
    function printBits($x) {
        if ($x >= -128 && $x <= 127) {
            for ($i = 7; $i >= 0; $i--) {
                echo ($x >> $i & 1 == 1) ? 1 : 0;
            }
        } else if ($x >= -25000 && $x <= 25000) {
            for ($i = 15; $i >= 0; $i--) {
                echo ($x >> $i & 1 == 1) ? 1 : 0;
            }
        } else if ($x >= -100000 && $x <= 100000) {
            for ($i = 31; $i >= 0; $i--) {
                echo ($x >> $i & 1 == 1) ? 1 : 0;
            }
        } else {
            for ($i = 63; $i >= 0; $i--) {
                echo ($x >> $i & 1 == 1) ? 1 : 0;
            }
        }
    }
    
    echo "byte 型整数aの値：";
    $a = trim(fgets(STDIN));
    echo "short型整数bの値：";
    $b = trim(fgets(STDIN));
    echo "int  型整数cの値：";
    $c = trim(fgets(STDIN));
    echo "long 型整数dの値：";
    $d = trim(fgets(STDIN));

    echo "aのビット：", printBits($a), "\n";
    echo "bのビット：", printBits($b), "\n";
    echo "cのビット：", printBits($c), "\n";
    echo "dのビット：", printBits($d), "\n";
?>