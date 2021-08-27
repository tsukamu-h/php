<?php
    function arrayInsOf($a, int $idx, int $x) {
        if ($idx < count($a) || $idx >= 0) {
            for ($i = count($a); $i > $idx; $i--) {
                $a[$i] = $a[$i - 1];
            }
            $a[$idx] = $x;
            for ($i = 0; $i < $count; $i++) {
                echo $a[$i];
            }
            return $a;
        }
    }
    
    echo "要素数：";
    $n = trim(fgets(STDIN));
    $x = array();
    for ($i = 0; $i < $n; $i++) {
        echo "x[", $i, "]：";
        $x[$i] = trim(fgets(STDIN));
    }

    echo "挿入する要素のインデックス：";
    $idx = trim(fgets(STDIN));
    echo "挿入する値：";
    $t = trim(fgets(STDIN));
    
    $y = arrayInsOf($x, $idx, $t);
    for ($i = 0; $i < count($y); $i++) {
        echo "y[", $i, "] = ", $y[$i], "\n";
    }
?>