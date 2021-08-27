<?php
    echo "変数a：";
    $a = trim(fgets(STDIN));
    echo "変数b：";
    $b = trim(fgets(STDIN));
    
    $sub = $a;

    if ($b > $a) {
        $a = $b;
        $b = $sub;
    }

    echo "a≧bとなるようにソートしました。\n";
    echo "変数aは", $a, "です。\n";
    echo "変数bは", $b, "です。";
?>