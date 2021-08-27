<?php
    echo "何個*を表示しますか：";
    $num = trim(fgets(STDIN));

    if ($num > 0) {
        for ($i = 0; $i < $num; $i++) {
            echo "*";
        }

        echo "\n";
    }
?>