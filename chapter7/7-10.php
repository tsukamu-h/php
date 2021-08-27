<?php
    // どこをメソッドとするのが良いのかがわからなかった。
    // 式の出力のコードが問題集のものよりもかなり長くなった
    echo "暗算力トレーニング!!\n";
    math();
    
    // 整数値を読み込みその値を返却するメソッド
    function math() {
        do {
            $x = rand(100, 999);
            $y = rand(100, 999);
            $z = rand(100, 999);
            $type = rand(0, 3);
            $ans = 0;
            
            do {
                if ($type == 0) {
                    echo $x, " + ", $y, " + ", $z, " = ";
                    $ans = $x + $y + $z;
                } else if ($type == 1) {
                    echo $x, " + ", $y, " - ", $z, " = ";
                    $ans = $x + $y - $z;
                } else if ($type == 2) {
                    echo $x, " - ", $y, " + ", $z, " = ";
                    $ans = $x - $y + $z;
                } else {
                    echo $x, " - ", $y, " - ", $z, " = ";
                    $ans = $x - $y - $z;
                }
    
                $stdin = trim(fgets(STDIN));
                if ($stdin != $ans) {
                    echo "違いますよ!!\n";
                }
            } while ($stdin != $ans);
            do {
                echo "もう一度？<Yes...1／No...0>：";
                $a = trim(fgets(STDIN));
            } while ($a > 1 || $a < 0);
        } while ($a == 1);
    }
?>