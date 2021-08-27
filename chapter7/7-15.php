<?php
    function sumOf($a) {
        $b = 0;
        for ($i = 0; $i < count($a); $i++) {
            $b += $a[$i];
        }
        return $b;
    }


    echo "要素数：";
    $n = trim(fgets(STDIN));
    $a = array();
    for ($i = 0; $i < $n; $i++) {
        echo "x[", $i, "]：";
        $a[$i] = trim(fgets(STDIN));
    }
    

    echo "全要素の合計は", sumOf($a), "です。";
?>