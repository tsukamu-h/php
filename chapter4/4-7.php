<?php
    echo "何個*を表示しますか：";
    $num = trim(fgets(STDIN));

    if ($num > 0) {
        $count = 0;
        while($count < $num) {
            echo "*";
            $count++;
        }
        echo "\n";
    }
?>