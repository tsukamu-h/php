<?php
    function minOf($a) {
        $b = 0;
        for ($i = 0; $i < count($a); $i++) {
            if ($i == 0) {
                $b = $a[$i];
            } else if ($b > $a[$i]) {
                $b = $a[$i];
            }
        }
        return $b;
    }


    echo "人数は：";
    $n = trim(fgets(STDIN));
    echo $n, "人の身長と体重を入力せよ。\n";
    $a = array();
    $b = array();
    for ($i = 0; $i < $n; $i++) {
        echo ($i + 1), "番目の身長：";
        $a[$i] = trim(fgets(STDIN));
        echo ($i + 1), "番目の体重：";
        $b[$i] = trim(fgets(STDIN));
    }
    

    echo "最も背が低い人の身長：", minOf($a), "cm\n";
    echo "最も痩せている人の体重：", minOf($b), "kg";
?>