<?php
    $b1 = true;
    $b2 = false;
    $str = "こんにちは";

    echo "b1 = ", var_export($b1), "\n";
    echo "b2 = ", var_export($b2);

    // 条件演算子
    echo "\nb1 = ", ($b1 == 1 ? "true" : "false"), "\n";
    echo "b2 = ", ($b2 == 1 ? "true" : "false");
?>