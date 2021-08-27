<?php
    do {
        echo "整数値：";
        $num = trim(fgets(STDIN));
        if($num > 0) {
            echo "その値は正です。\n";
        } else if($num < 0) {
            echo "その値は負です。\n";
        } else {
            echo "その値は0です。";
        }
        
        echo "もう一度？ 1...Yes／0...No：";
        $i = trim(fgets(STDIN));
    } while($i == 1);
?>