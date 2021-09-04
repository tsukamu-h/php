<?php

    // PHPでは例外がスローされないためできない可能性がある。
    function swap($a, $idx1, $idx2) {
            $t = $a[$idx1];
            $a[$idx1] = $a[$idx2];
            $a[$idx2] = $t;            
    }

    function reverse($a) {
        try {
            for ($i = 0; $i < count($a) / 2; $i++) {
                swap($a, $i, count($a) - $i);
            }
            throw new RangeException();
        } catch (RangeException $e) {
            echo "なにもない";
        } catch (OutOfRangeException $e) {
            echo "未定義";
        }
    }

    echo "要素数：";
    $num = trim(fgets(STDIN));

    $x = array();

    for ($i = 0; $i < $num; $i++) {
        echo "x[", $i, "] : ";
        $x[$i] = trim(fgets(STDIN));
    }

    reverse($x);

    echo "要素の並びを反転しました。\n";
    for ($i = 0; $i < $num; $i++) {
        echo "x[", $i, "] = ", $x[$i], "\n";
    }
?>