<?php
    do {
        echo "要素数：";
        $stdin = trim(fgets(STDIN));
    } while ($stdin < 0);
    
    $array = array();

    for ($i = 0; $i < $stdin; $i++) {
        $array[$i] = rand(1, 10);
    }

    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if (($i + $array[$j]) - 10 >= 0) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }

    for ($i = 1; $i <= $stdin; $i++) {
        if ($i == $stdin) {
            echo "--\n";
            break;
        }
        echo "--";
    }

    for ($i = 0; $i < $stdin; $i++) {
        echo $i % 10, " ";
    }
?>