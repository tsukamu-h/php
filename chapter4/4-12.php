<?php
    echo "カウントダウンをします。\n";
    
    do {
        echo "正の整数値：";
        $num = trim(fgets(STDIN));
    } while ($num <= 0);

    for ( ; $num >= 0; $num--) {
        echo $num, "\n";
    }
?>