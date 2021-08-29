<?php
    require '10-7.php';

    echo "xの値：";
    $x = trim(fgets(STDIN));
    echo "yの値：";
    $y = trim(fgets(STDIN));
    echo "zの値：";
    $z = trim(fgets(STDIN));

    echo "配列aの要素数：";
    $a = array();
    $a_array = trim(fgets(STDIN));
    for ($i = 0; $i < $a_array; $i++) {
        echo "a[", $i, "]：";
        $a[$i] = trim(fgets(STDIN));
    }

    echo "x, yの最小値は", MinMax::getMin($x, $y), "です。\n";
    echo "x, yの最大値は", MinMax::getMax($x, $y), "です。\n";
    echo "x, y, zの最小値は", MinMax::getMin2($x, $y, $z), "です。\n";
    echo "x, y, zの最大値は", MinMax::getMax2($x, $y, $z), "です。\n";

    echo "配列aの最小値は", MinMax::getMin3($a), "です。\n";
    echo "そのインデックスは{ ";
    $array =  MinMax::getMinArray($a);
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i], " ";
    }
    echo "}です。\n";
    

    echo "配列aの最大値は", MinMax::getMax3($a), "です。\n";
    echo "そのインデックスは{ ";
    $array =  MinMax::getMaxArray($a);
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i], " ";
    }
    echo "}です。\n";
?>