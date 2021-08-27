<?php
    echo "整数値：";
    $stdin = trim(fgets(STDIN));
    if ($stdin > 0) {
        echo "その値は", $stdin, "です。";
    } else {
        echo "その値は", (-$stdin), "です。";
    }
?>