<?php
    echo "整数値：";
    $stdin = trim(fgets(STDIN));
    echo "最下位桁を除いた値は", (int)($stdin / 10), "です。\n";
    echo "最下位桁は", ($stdin % 10), "です。";
?>