<?php
    echo "カウントダウンをします。\n";
    
    do {
        echo "正の整数値：";
        $num = trim(fgets(STDIN));
    } while ($num <= 0);

    for ($i = 0 ; $i <= $num; $i++) {
        echo $i, "\n";
    }
?>