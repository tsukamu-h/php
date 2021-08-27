<?php
    function aryExchng($a, $b) {
        $c = $a;
        if (count($a) >= count($b)) {
            for ($i = 0; $i < count($b); $i++) {
                $a[$i] = $b[$i];
            }
            for ($i = 0; $i < count($b); $i++) {
                $b[$i] = $c[$i];
            }
        } else {
            for ($i = 0; $i < count($a); $i++) {
                $a[$i] = $b[$i];
            }
            for ($i = 0; $i < count($a); $i++) {
                $b[$i] = $c[$i];
            }
        }
        return array($a, $b);
    }
    
    echo "配列aの要素数：";
    $n = trim(fgets(STDIN));
    $a = array();
    for ($i = 0; $i < $n; $i++) {
        echo "a[", $i, "]：";
        $a[$i] = trim(fgets(STDIN));
    }

    echo "配列bの要素数：";
    $n2 = trim(fgets(STDIN));
    $b = array();
    for ($i = 0; $i < $n2; $i++) {
        echo "b[", $i, "]：";
        $b[$i] = trim(fgets(STDIN));
    }

    $array = aryExchng($a, $b);
    $a = $array[0];
    $b = $array[1];
    echo "配列aとbの全要素を交換しました。\n";
    
    for ($i = 0; $i < count($a); $i++) {
        echo "a[", $i, "] = ", $a[$i], "\n";      
    }

    for ($i = 0; $i < count($b); $i++) {
        echo "b[", $i, "] = ", $b[$i], "\n";      
    }
?>