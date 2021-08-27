<?php
    function addMatrix($x, $y) {
        $z = array();
        for ($i = 0; $i < count($x); $i++) {
            for ($j = 0; $j < count($x[$i]); $j++) {
                $z[$i][$j] = $x[$i][$j] + $y[$i][$j];
            }
        }
        return $z;
    }

    function printMatrix($x) {
        for ($i = 0; $i < count($x); $i++) {
            for ($j = 0; $j < count($x[$i]); $j++) {
                echo $x[$i][$j], " ";
            }
            echo "\n";
        }
    }
    
    echo "行列の行数：";
    $r = trim(fgets(STDIN));
    echo "行列の列数：";
    $c = trim(fgets(STDIN));

    $a = array();
    $b = array();

    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            echo "a[", $i, "][", $j, "]：";
            $a[$i][$j] = trim(fgets(STDIN));
        }       
    }

    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            echo "b[", $i, "][", $j, "]：";
            $b[$i][$j] = trim(fgets(STDIN));
        }       
    }

    echo "行列a\n";
    printMatrix($a);

    echo "\n行列b\n";
    printMatrix($b);

    $c = addMatrix($a, $b);

    echo "\n行列c\n";
    printMatrix($c);
?>