<?php
    echo "ピラミッドを表示します。\n";

    do {
        echo "段数は：";
        $stage = trim(fgets(STDIN));
    } while ($stage <= 0);

    for ($i = 1; $i <= $stage; $i++) {
        for ($j = 0; $j < ($stage - $i); $j++) {
            echo " ";
        }
        for ($j = 0; $j < $i * 2 - 1; $j++) {
            echo "*";
        }
        echo "\n";
    }
?>