<?php
    // zのみ参照渡し
    function addMatrix($x, $y, &$z) {
        if (count($x) != count($y) || count($x) != count($z)) {
            return false;
        }
        for ($i = 0; $i < count($x); $i++) {
            if (count($x[$i]) != count($y[$i]) || count($x[$i]) != count($z[$i])) {
                return false;
            }
        }
        for ($i = 0; $i < count($x); $i++) {
            for ($j = 0; $j < count($x[$i]); $j++) {
                $z[$i][$j] = $x[$i][$j] + $y[$i][$j];
            }
        }
        return true;
        
    }
    
    echo "行列a\n";
    $a = [[1, 2, 3], [4, 5, 6]];
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a[$i]); $j++) {
            echo $a[$i][$j], " ";
        }
        echo "\n";
    }

    echo "\n行列b\n";
    $b = [[6, 3, 4], [5, 1, 2]];
    for ($i = 0; $i < count($b); $i++) {
        for ($j = 0; $j < count($b[$i]); $j++) {
            echo $b[$i][$j], " ";
        }
        echo "\n";
    }

    $c = [[0, 0, 0], [0, 0, 0]];

    if (addMatrix($a, $b, $c)) {
        echo "\n行列c\n";
        for ($i = 0; $i < count($c); $i++) {
            for ($j = 0; $j < count($c[$i]); $j++) {
                echo $c[$i][$j], " ";
            }
            echo "\n";
        }
    }
?>