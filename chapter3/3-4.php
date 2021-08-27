<?php
    echo "変数A：";
    $a = trim(fgets(STDIN));
    echo "変数B：";
    $b = trim(fgets(STDIN));
    if (!($a % $b == 0)) {
        echo "BはAの約数ではありません。";
    } else {
        echo "BはAの約数です。";
    }
?>