<?php
    function aryRmvN($a, int $idx, int $n) {
        for ($i = $idx; $i <= (count($a) - $idx - $n); $i++) {
            $a[$i] = $a[$i + $n];
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

    echo "削除する開始のインデックス：";
    $b = trim(fgets(STDIN));
    echo "削除する要素の個数：";
    $c = trim(fgets(STDIN));
    

    if ($b >= count($a) || $b < 0) {
        echo "そのインデックスは存在しません。\n";
    } else {
        $a = aryRmvN($a, $b, $c);
        for ($i = 0; $i < $n; $i++) {
            echo "a[", $i, "] = ", $a[$i], "\n";
        }
    }
?>