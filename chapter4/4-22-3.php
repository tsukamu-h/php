<?php
    echo "右下直角の二等辺三角形を表示します。\n";

    do {
        echo "段数は：";
        $stage = trim(fgets(STDIN));
    } while ($stage <= 0);

    for ($i = 0; $i < $stage; $i++) {
        for ($j = 1; $j <= $stage; $j++) {
            if($stage - ($i + $j) > 0) {
                echo " ";
            } else {
                echo "*";
            }
        }
        echo "\n";
    }
?>