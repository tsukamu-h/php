<?php
    echo "カウントダウンをします。\n";
    
    do {
        echo "正の整数値：";
        $num = trim(fgets(STDIN));
    } while ($num <= 0);

    while ($num >= 0) {
        echo $num--, "\n";
    }

    echo "xの値は-1になりました。"
?>