<?php
    require '9-4.php';

    echo "day1を入力せよ。\n";
    echo "年：";
    $y = trim(fgets(STDIN));
    echo "月：";
    $m = trim(fgets(STDIN));
    echo "日：";
    $d = trim(fgets(STDIN));

    $day1 = new Day($y, $m, $d);
    echo "day1 = ", $day1->toString();
?>