<?php
    echo "何個*を表示しますか：";
    $num = trim(fgets(STDIN));

    if ($num > 0) {
        for ($i = 1; $i <= $num; $i++) {
            echo "*";
            if ($i % 5 == 0) {
                echo "\n";
            }
        }

        if($num % 5 != 0) {
            echo "\n";
        }
    }
?>