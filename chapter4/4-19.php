<?php
    echo "nの値：";
    $num = trim(fgets(STDIN));

    if ($num > 0) {
        for ($i = 1; $i <= $num; $i++) {
            echo $i, "の２乗は", $i * $i, "\n";
        }
    }
?>