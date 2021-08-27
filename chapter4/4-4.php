<?php
    echo "整数A：";
    $a = trim(fgets(STDIN));
    echo "整数B：";
    $b = trim(fgets(STDIN));

    if($a > $b) {
        $sub = $a;
        $a = $b;
        $b = $sub;
    }

    do {
        echo $a, " ";
        $a++;
    } while ($a <= $b);

    // for文
    /*for ($a; $a <= $b; $a++) {
        echo $a, " ";
    }*/
?>