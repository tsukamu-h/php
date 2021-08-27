<?php
    function linearSearch($a, int $key) {
        for ($i = 0; $i < count($a); $i++) {
            if ($a[$i] == $key) {
                return $i;
            }
        }
    }
    
    function linearSearchR($a, int $key) {
        for ($i = (count($a) - 1); $i >= 0; $i--) {
            if ($a[$i] == $key) {
                return $i;
            }
        }
    }


    echo "要素数：";
    $n = trim(fgets(STDIN));
    $a = array();
    for ($i = 0; $i < $n; $i++) {
        echo "x[", $i, "]：";
        $a[$i] = trim(fgets(STDIN));
    }

    echo "探す値：";
    $b = trim(fgets(STDIN));
    $count = 0;

    for ($i = 0; $i < $n; $i++) {
        if ($a[$i] == $b) {
            $count++;
        }
    }

    if ($count >= 1) {
        echo "その値の要素は複数存在します。\n";
        echo "最も先頭のものはx[", linearSearch($a, $b), "]にあります。\n";
        echo "最も末尾のものはx[", linearSearchR($a, $b), "]にあります。";
    } else if ($count == 1) {
        echo "その値の要素は一つ存在します。\n";
        echo "それはx[", linearSearch($a, $b), "]にあります。";
    } else {
        echo "その値の要素は存在しません。";
    }
?>