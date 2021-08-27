<?php
    function printBits(int $x) {
        for ($i = 31; $i >= 0; $i--) {
            echo ($x >> $i & 1) == 1 ? "1" : "0";
        }
    }

    function set(int $x, int $pos) {
        if ($x >> $pos & 1 == 1) {
        } else {
            $b = 1;
            for ($i = 1; $i <= $pos; $i++) {
                $b *= 2;
            }
            $x += $b;
        }
        return $x;
    }

    function set2(int $x, int $pos) {
        if ($x >> $pos & 1 == 1) {
            $b = 1;
            for ($i = 1; $i <= $pos; $i++) {
                $b *= 2;
            }
            $x -= $b;
        }
        return $x;
    }

    function inverse(int $x, int $pos) {
        if ($x >> $pos & 1 == 1) {
            return set2($x, $pos);
        } else {
            return set($x, $pos);
        }
    }

    echo "整数xのposビット目を操作します。\n";
    echo "x   :";
    $a = trim(fgets(STDIN));
    echo "pos :";
    $b = trim(fgets(STDIN));

    echo "x               = ";
    printBits($a);
    echo "\nset(x, pos)     = ";
    printBits(set($a, $b));
    echo "\nreset(x, pos)   = ";
    printBits(set2($a, $b));
    echo "\ninverse(x, pos) = ";
    printBits(inverse($a, $b));


?>