<?php
    require '9-1.php';

    function compCoordinate(Coordinate $c1, Coordinate $c2) {
        return $c1->getX() == $c2->getX() && $c1->getY() == $c2->getY();
    }
    $x = 0;
    $y = 0;
    echo "座標pを入力せよ。\n";
    echo "X座標：";
    $x = trim(fgets(STDIN));
    echo "Y座標：";
    $y = trim(fgets(STDIN));
    $p = new Coordinate($x, $y);

    echo "座標qを入力せよ。\n";
    echo "X座標：";
    $x = trim(fgets(STDIN));
    echo "Y座標：";
    $y = trim(fgets(STDIN));
    $q = new Coordinate($x, $y);

    echo ($p === $q) ? "p == qです。\n" : "p != qです。\n";
    echo ($p->getX() == $q->getX() && $p->getY() == $q->getY()) ? "pとqは等しいです。\n" : "pとqは等しくありません。\n";
    echo (compCoordinate($p, $q)) ? "pとqは等しいです。" : "pとqは等しくありません。";

?>