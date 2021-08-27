<?php
    echo "整数値xとyとzの平均値を求めます。\n";
    
    echo "xの値：";
    $x = trim(fgets(STDIN));
    echo "yの値：";
    $y = trim(fgets(STDIN));
    echo "zの値：";
    $z = trim(fgets(STDIN));

    $ave = (float)(($x + $y + $z) / 3);
    echo "xとyとzの平均値は", sprintf('%.3f',$ave), "です。";
?>