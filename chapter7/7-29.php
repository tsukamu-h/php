<?php
    function AryClone2($a) {
        $z = array();
        for ($i = 0; $i < count($a); $i++) {
            for ($j = 0; $j < count($a[$i]); $j++) {
                $z[$i][$j] = $a[$i][$j];
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

    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            printf("a[%d][%d]：", $i, $j);
            $a[$i][$j] = trim(fgets(STDIN));
        }       
    }

    echo "行列a\n";
    printMatrix($a);

    $b = AryClone2($a);

    echo "行列aの複製\n";
    printMatrix($b);

    
?>