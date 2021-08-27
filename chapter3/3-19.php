<?php
    echo "変数a：";
    $a = trim(fgets(STDIN));
    echo "変数b：";
    $b = trim(fgets(STDIN));
    echo "変数c：";
    $c = trim(fgets(STDIN));
    
    // 回答見る前のコード
    /*
    $sub = $a;

    if ($b <= $a) {
        if($b <= $c) {
            $a = $b;
            $b = $sub;
            if($c < $b) {
                $sub = $b;
                $b = $c;
                $c = $sub;
            }
        } else {
            $a = $c;
            $c = $sub;
        }
    } else {
        if ($a > $c) {
            $a = $c;
            $c = $sub;
        } else if($b > $c) {
            $sub = $b;
            $b = $c;
            $c = $b;
        }
    }*/

    // 問題集参照
    if ($a > $b) {
        $sub = $a;
        $a = $b;
        $b = $sub;
    }

    if ($b > $c) {
        $sub = $b;
        $b = $c;
        $c = $sub;
    }

    if ($a > $b) {
        $sub = $a;
        $a = $b;
        $b = $sub;
    }



    echo "a≦b≦cとなるようにソートしました。\n";
    echo "変数aは", $a, "です。\n";
    echo "変数bは", $b, "です。\n";
    echo "変数cは", $c, "です。";
?>