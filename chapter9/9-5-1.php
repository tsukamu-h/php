<?php
    // 銀行口座クラスの利用例1
    require '9-5.php';

    $d = new Day(2010, 10, 15);
    $suzuki = new Account("鈴木一郎", "125768", 100, $d);

    $p = $suzuki->getOpenDay();
    echo "口座開設日：", $p->toString(), "\n";

    $p->set(1999, 12, 31);

    $q = $suzuki->getOpenDay();
    echo "口座開設日：", $q->toString();

?>