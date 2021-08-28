<?php
    require '9-1.php';

    echo "座標pを入力せよ。\n";
    echo "X座標：";
    $x = trim(fgets(STDIN));
    echo "Y座標：";
    $y = trim(fgets(STDIN));

    $p = new Coordinate($x, $y);
    echo "p = (", $p->getX(), ", ", $p->getY(), ")\n";
    $q = $p;
    $p->set(9.9, 9.9);
    echo "p = (", $p->getX(), ", ", $p->getY(), ")\n";
    echo "q = (", $q->getX(), ", ", $q->getY(), ")\n";
?>