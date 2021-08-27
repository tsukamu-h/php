<?php
    // 問題集見ました。
    function printArray($nums) {
        // １次元配列
        if (array_depth($nums) == 1) {
            foreach ($nums as $num) {
                echo $num, " ";
            }
            echo "\n";
        // ２次元配列
        } else {
            // 配列の最大の列数を求める
            $width = array();
            $max = 0;
            for ($i = 0; $i < count($nums); $i++) {
                if (count($nums[$i]) > $max) {
                    $max = count($nums[$i]);
                }
            }

            // 各列の最大桁数をmaxWidthに求める
            $maxWidth = array();
            $count = 0;
            for ($i = 0; $i < count($nums); $i++) {
                if ($count < count($nums[$i])) {
                    $count = count($nums[$i]);
                }
            }
            for ($i = 0; $i < $count; $i++) {
                $maxWidth[$i] = 0;
            }
            for ($i = 0; $i < count($nums); $i++) {
                for ($j = 0; $j < count($nums[$i]); $j++) {
                    $value = $nums[$i][$j];
                    $width[$i][$j] = ($value < 0) ? 1 : 0;
                    do {
                        $width[$i][$j]++;
                        $value /= 10;
                    } while ($value >= 1 || $value <= -1);
                    if ($width[$i][$j] > $maxWidth[$j]) {
                        $maxWidth[$j] = $width[$i][$j];
                    }
                }
            }

            // 配列の各要素の値を表示する。
            for ($i = 0; $i < count($nums); $i++) {
                for ($j = 0; $j < count($nums[$i]) - 1; $j++) {
                    echo $nums[$i][$j];
                    for ($k = 0; $k <= $maxWidth[$j] - $width[$i][$j]; $k++) {
                        echo " ";
                    }
                }
                echo $nums[$i][count($nums[$i]) - 1], "\n";
            }
        }
    }

    // 配列の深さを求める関数
    function array_depth($array) {
        $max_depth = 1;
        foreach ($array as $value) {
            if (is_array($value)) {
                $max_depth = array_depth($value) + 1;
            }
        }
        return $max_depth;
    }
    
    echo "１次元配列xの要素数：";
    $num = trim(fgets(STDIN));

    for ($i = 0; $i < $num; $i++) {
        printf("x[%d]：", $i);
        $x[$i] = trim(fgets(STDIN));      
    }

    echo "２次元配列yの行数：";
    $r = trim(fgets(STDIN));
    // $rの各行の列の数を表す変数
    $r_array = array();


    for ($i = 0; $i < $r; $i++) {
        printf("%d行目の列数：", $i);
        $r_array[$i] = trim(fgets(STDIN));       
    }

    $y = array();

    echo "各要素の値を入力せよ。\n";
    for ($i = 0; $i < $r; $i++) {
        // $yの各行の配列を代入するための仮の配列
        $y_array = array();
        for ($j = 0; $j < $r_array[$i]; $j++) {
            printf("y[%d][%d]：", $i, $j);
            $y_array[$j] = trim(fgets(STDIN));       
        }
        $y[$i] = $y_array;
    }
    
    echo "\n１次元配列x\n";
    printArray($x);
    echo "\n２次元配列y\n";
    printArray($y);
?>