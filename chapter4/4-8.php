<?php
    echo "何個表示しますか：";
    $num = trim(fgets(STDIN));

    if ($num > 0) {
        $count = 0;
        while($count < $num) {
            if ($count % 2 == 0) {
                echo "*";
            } else {
                echo "+";
            }
            $count++;
        }
        echo "\n";
    }
?>