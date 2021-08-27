<?php
    echo "正方形を表示します。\n";

    do {
        echo "段数は：";
        $stage = trim(fgets(STDIN));
    } while ($stage <= 0);

    for ($i = 0; $i < $stage; $i++) {
        for ($j = 0; $j < $stage; $j++) {
            echo "*";
        }
        echo "\n";
    }
?>