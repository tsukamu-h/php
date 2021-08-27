<?php
    echo "6人の国語・数学の点数を入力せよ。\n";

    $a = array();
    $b = array();
    for ($i = 0; $i < 6; $i++) {
        echo ($i + 1), "番...国語：";
        for ($j = 0; $j < 2; $j++) {
            if ($j == 1) {
                echo "      数学：";
            }
            $a[$j] = trim(fgets(STDIN));
        }
        $b[$i] = $a;
    }

    echo "No.  国語  数学 平均\n";

    // 全員の各科目の点数を平均を表示
    for ($i = 0; $i < 6; $i++) {
        $sum = 0;
        echo " ", ($i + 1);
        for ($j = 0; $j < 2; $j++) {
            echo "    ", $b[$i][$j];
            $sum += $b[$i][$j];
        }
        echo "  ", sprintf('%.1f', ($sum / 2)), "\n";
    }

    // 国語と数学の合計点を計算
    $ja = 0;
    $math = 0;
    
    for ($i = 0; $i < 6; $i++) {
        $ja += $b[$i][0];
        $math += $b[$i][1];
    }

    // 平均点を表示
    echo "平均  ", sprintf('%.1f', ($ja / 6)), "  ", sprintf('%.1f', ($math / 6));
?>