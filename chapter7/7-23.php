<?php
    function arraySrchIdx($a, $x) {
        $b = array();
        $count = 0;
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i] == $x) {
                $b[$count] = $i;
                $count++;
            }
        }
        return $b;
    }
    
    echo "要素数：";
    $n = trim(fgets(STDIN));
    $x = array();
    for ($i = 0; $i < $n; $i++) {
        echo "x[", $i, "]：";
        $x[$i] = trim(fgets(STDIN));
    }

    echo "探索する値：";
    $t = trim(fgets(STDIN));

    $b = arraySrchIdx($x, $t);

    echo "一致する要素のインデックス\n";

    for ($i = 0; $i < count($b); $i++) {
        echo $b[$i], "\n";      
    }
?>