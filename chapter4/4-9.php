<?php
    echo "正の整数値の桁数を求めます。\n";

    do {
        echo "正の整数値：";
        $num = trim(fgets(STDIN));
    } while ($num <= 0);
    

    $count = 1;
    while($num >= 10) {
        $num /= 10;
        $count++;
    }
    echo "その数は" , $count, "桁です。";
?>