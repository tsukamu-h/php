<?php
    require '9-1.php';

    echo "座標は何個：";
    $n = trim(fgets(STDIN));

    $a = array();

    for ($i = 0; $i < $n; $i++) {
        $a[$i] = new Coordinate(5.5, 7.7);
    }

    for ($i = 0; $i < $n; $i++) {
        printf("a[%d] = (%.1f, %.1f)\n", $i, $a[$i]->getX(), $a[$i]->getY());
    }

?>