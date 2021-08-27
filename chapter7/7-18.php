<?php
    function aryRmv($a, int $idx) {
        $count = 0;
        for ($i = 0; $i < count($a); $i++) {
            if ($i == $idx) {
                continue;
            }
            $a[$count] = $a[$i];
            $count++;
        }
        return $a;
    }
    
    echo "要素数：";
    $n = trim(fgets(STDIN));
    $a = array();
    for ($i = 0; $i < $n; $i++) {
        echo "a[", $i, "]：";
        $a[$i] = trim(fgets(STDIN));
    }

    echo "削除する要素のインデックス：";
    $b = trim(fgets(STDIN));
    

    if ($b >= count($a) || $b < 0) {
        echo "そのインデックスは存在しません。\n";
    } else {
        $a = aryRmv($a, $b);
        for ($i = 0; $i < $n; $i++) {
            echo "a[", $i, "] = ", $a[$i], "\n";
        }
    }
?>