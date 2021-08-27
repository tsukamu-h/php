<?php
    do {
        echo "何cmから：";
        $min = trim(fgets(STDIN));
        echo "何cmまで：";
        $max = trim(fgets(STDIN));
        echo "何cmごと：";
        $dif = trim(fgets(STDIN));
    } while ($min<= 0 || $max <= 0 || $dif <= 0);

    $weight = 0;

    echo "身長 標準体重\n";
    echo "-------------\n";

    for ( ; $min <= $max; $min += $dif) {
        $weight = ($min - 100) * 0.9;
        printf("%d  %.1f\n", $min, $weight);
    }
?>