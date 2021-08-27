<?php
   
   // 問題集参照
   function printBits(int $x) {
        for ($i = 31; $i >= 0; $i--) {
            echo ($x >> $i & 1) == 1 ? "1" : "0";
        }
    }

    function rRotate(int $x, int $n) {
        if ($n < 0) return lRotate($x, -$n);
        $n %= 32;
        return ($n == 0 ? $x: ($x >> $n) | ($x << (32 - $n)));
    }

    function lRotate(int $x, int $n) {
        if ($n < 0) return rRotate($x, -$n);
        $n %= 32;
        return ($n == 0 ? $x: ($x << $n) | ($x >> (32 - $n)));
    }

    echo "整数xをnビット回転します。\n";
    echo "x :";
    $x = trim(fgets(STDIN));
    echo "n :";
    $n = trim(fgets(STDIN));

    echo "回転前 = ";
    printBits($x);
    echo "\n右回転 = ";
    printBits(rRotate($x, $n));
    echo "\n左回転 = ";
    printBits(lRotate($x, $n));


?>