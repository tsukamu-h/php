<?php
    require '10-8.php';

$today = new Day((int)date("Y"), (int)date("m"), (int)date("d"));
    echo "今日は", $today->toString(), "です。\n";

    echo "西暦年：";
    $y = trim(fgets(STDIN));
    echo "その年は閏年", Day::isLeap($y) ? "です。" : "ではありません。";
?>