<?php
    $rand = rand(10, 99);
    echo "数当てゲーム開始!!\n";
    echo "10～99の数を当ててください。\n";
    do {    
        echo "いくつかな：";
        $num = trim(fgets(STDIN));
        if ($num < $rand) {
            echo "もっと大きな数だよ。\n";
        } else if ($num > $rand) {
            echo "もっと小さな数だよ。\n";
        }
    } while(!($num == $rand));

    echo "正解です。";
?>