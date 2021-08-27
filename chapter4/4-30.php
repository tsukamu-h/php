<?php
    $rand = rand(0, 99);
    echo "数当てゲーム開始!!\n";
    echo "0～99の数を当ててください。\n";

    for ($i = 0; $i < 6; $i++) {
        echo "残り", (6 - $i), "回。いくつかな：";
        $num = trim(fgets(STDIN));
        if ($num < $rand) {
            echo "もっと大きな数だよ。\n";
        } else if ($num > $rand) {
            echo "もっと小さな数だよ。\n";
        } else {
            break;
        }
    } 
    
    if ($num == $rand) {
        echo ($i + 1), "回で当たりましたね。";
    } else {
        echo "残念。正解は", $rand, "でした。";
    }
    
?>