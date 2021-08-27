<?php
    echo "整数値：";
    $stdin = trim(fgets(STDIN));
    echo "10を加えた値は", ($stdin + 10), "です。\n";
    echo "10を減じた値は", ($stdin - 10), "です。";
?>