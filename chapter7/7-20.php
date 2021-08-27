<?php
    function aryIns($a, int $idx, int $x) {
        for ($i = (count($a) - 1); $i > $idx; $i--) {
            $a[$i] = $a[$i - 1];
        }
        $a[$idx] = $x;
        return $a;
    }
    
    echo "要素数：";
    $n = trim(fgets(STDIN));
    $a = array();
    for ($i = 0; $i < $n; $i++) {
        echo "a[", $i, "]：";
        $a[$i] = trim(fgets(STDIN));
    }

    echo "挿入する要素のインデックス：";
    $idx = trim(fgets(STDIN));
    echo "挿入する値：";
    $x = trim(fgets(STDIN));
    

    if ($idx >= count($a) || $idx < 0) {
        echo "そのインデックスは存在しません。\n";
    } else {
        $a = aryIns($a, $idx, $x);
        for ($i = 0; $i < $n; $i++) {
            echo "a[", $i, "] = ", $a[$i], "\n";
        }
    }
?>