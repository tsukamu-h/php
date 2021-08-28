<?php
    require '9-2.php';

    echo "座標pを入力せよ。\n";
    echo "X座標：";
    $x = trim(fgets(STDIN));
    echo "Y座標：";
    $y = trim(fgets(STDIN));

    $p = new Coordinate($x, $y);
    echo "p = ", $p->toString(), "\n";

    $q = new Coordinate($p->getX(), $p->getY());
    echo "qをpと同じ座標として作りました。\n";
    echo "q = ", $q->toString(), "\n";

    if ($p->equalTo($q)) {
        echo "pとqは等しいです。\n";
    } else {
        echo "pとqは等しくありません。\n";
    }

    $c1 = new Coordinate(0.0, 0.0);
    $c2 = new Coordinate(1.1, 2.2);

    echo "c1 = ", $c1->toString(), "\n";
    echo "c2 = ", $c2->toString(), "\n";

    $a = array();
    for ($i = 0; $i < 3; $i++) {
        $a[$i] = new Coordinate(0.0, 0.0);
    }

    for ($i = 0; $i < count($a); $i++) {
        echo "a[", $i, "] = ", $a[$i]->toString(), "\n";
    }
?>