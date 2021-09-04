<?php

    echo "xの値：";
    $x = trim(fgets(STDIN));
    echo "yの値：";
    $y = trim(fgets(STDIN));

    echo "x * y = ", $x * $y, "\n";
    echo "x / y = ", (int)($x / $y);
?>