<?php
    function arrayRmvOf($a, int $idx) {
        $count = 0;
        $b = array();
        if ($idx >= 0 && $idx < count($a)) {
            for ($i = 0; $i < count($a); $i++) {
                if ($i == $idx) {
                    continue;
                }
                $b[$count] = $a[$i];
                $count++;
            }

            return $b;
        }
    }
    
    echo "要素数：";
    $n = trim(fgets(STDIN));
    $x = array();
    for ($i = 0; $i < $n; $i++) {
        echo "x[", $i, "]：";
        $x[$i] = trim(fgets(STDIN));
    }

    echo "削除する要素のインデックス：";
    $b = trim(fgets(STDIN));
    
    $y = arrayRmvOf($x, $b);
    for ($i = 0; $i < ($n - 1); $i++) {
        echo "y[", $i, "] = ", $y[$i], "\n";
    }  
?>