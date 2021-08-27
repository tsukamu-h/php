<?php
    function printBits(int $x) {
        for ($i = 31; $i >= 0; $i--) {
            echo ($x >> $i & 1) == 1 ? "1" : "0";
        }
    }

    
    
    function setN(int $x, int $pos, int $n) {
        $a = 1;
        for ($i = 0; $i < ($n - 1); $i++) {
            $a = $a << 1;
            $a++;
        }
        return $x | ($a << $pos);
    }

    function resetN(int $x, int $pos, int $n) {
        $a = 1;
        for ($i = 0; $i < ($n - 1); $i++) {
            $a = ($a << 1) + 1;
        }
        return $x & ~($a << $pos);
    }

    function inverseN(int $x, int $pos, int $n) {
        $a = 1;
        for ($i = 0; $i < ($n - 1); $i++) {
            $a = ($a << 1) + 1;
        }
        return $x ^ ($a << $pos);
    }

    echo "整数xのposビット目からn個のビットを操作します。\n";
    echo "x   :";
    $a = trim(fgets(STDIN));
    echo "pos :";
    $b = trim(fgets(STDIN));
    echo "n   :";
    $c = trim(fgets(STDIN));

    echo "x               = ";
    printBits($a);
    echo "\nset(x, pos)     = ";
    printBits(setN($a, $b, $c));
    echo "\nreset(x, pos)   = ";
    printBits(resetN($a, $b, $c));
    echo "\ninverse(x, pos) = ";
    printBits(inverseN($a, $b, $c));


?>