<?php
    do {
        echo "要素数：";
        $n = trim(fgets(STDIN));
    } while ($n <= 0);

    $a = array();
    $a_copy = array();

    for ($i = 0; $i < $n; $i++) {
        echo "a[", $i, "] = ";
        $array[$i] = trim(fgets(STDIN));
    }

    for ($i = 0; $i < $n; $i++) {
        do {
            $rand = rand(0, $n - 1);
            if ($i == 0) {
                $array_num = array($rand);
            } else {
                $array_num[$i] = $rand;
            }
            
            for ($j = 0; $j < $i; $j++) {
                if ($array_num[$i] == $array_num[$j]) {
                    break;
                }
            }
        } while ($i != $j);
    } 
    
    echo "要素をかき混ぜました。\n";
    
    for ($i = 0; $i < $n; $i++) {
        $array_copy[$i] = $array[$i];
    }

    for ($i = 0; $i < $n; $i++) {
        $array[$i] = $array_copy[$array_num[$i]];
        echo "a[", $i, "] = ", $array[$i], "\n";
    }
?>