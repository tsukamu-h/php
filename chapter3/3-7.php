<?php
    echo "変数a：";
    $a = trim(fgets(STDIN));
    echo "変数b：";
    $b = trim(fgets(STDIN));
    if ($a > $b) {
        echo "aのほうが大きいです。";
    } else if ($a < $b) {
        echo "bのほうが大きいです。";
    } else {
        echo "aとbは同じ値です。";
    }
?>