<?php
    echo "整数値：";
    $stdin = trim(fgets(STDIN));
    if ($stdin > 0) {
        echo "その値は正です。";
    } else if ($stdin < 0) {
        echo "その値は負です。";
    } else if ($stdin == 0) {
        echo "その値は0です。";
    }
?>