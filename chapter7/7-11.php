<?php
    
    function pow2($no) {
        $pw = 1;
        while ($no-- > 0) {
            $pw *= 2;
        }
        return $pw;
    }

    
    // 整数値を読み込みその値を返却するメソッド
    function math(int $x, int $n) {
        // 問題集参照
        printf("[a] x × (2の%d乗) = %d\n", $n, $x * pow2($n));
        printf("[b] x ÷ (2の%d乗) = %d\n", $n, $x / pow2($n));
        printf("[c] x << %d = %d\n", $n, $x << $n);
        printf("[d] x >> %d = %d\n", $n, $x >> $n);

        // 回答見る前のコード
        /*echo "[a] x × (2の", $n, "乗) = ", $x * pow(2, $n), "\n";
        echo "[b] x ÷ (2の", $n, "乗) = ", sprintf('%.0f', ($x / pow(2, $n))), "\n";
        echo "[c] x << ", $n, " = ", $x << $n, "\n";
        echo "[d] x >> ", $n, " = ", $x >> $n, "\n";*/

        echo "[a]と[c]の値は一致", ($x * pow(2, $n) == $x << $n) ? "します。" : "しません。", "\n";
        echo "[b]と[d]の値は一致", (sprintf('%d', ($x / pow(2, $n))) == $x >> $n) ? "します。" : "しません。";
        
    }

    echo "整数xをnビットシフトします。\n";
    echo "x：";
    $num = trim(fgets(STDIN));
    echo "n：";
    $num_mini = trim(fgets(STDIN));
    math($num, $num_mini);
?>