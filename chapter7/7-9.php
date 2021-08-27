<?php
    do {
        $num =readPlusInt();
        $num_reverse = 0;
        $num_array = array();
        $count = 0;

        do {
            $num_array[$count] = $num % 10;
            $num /= 10;
            $count++;
        } while ($num >= 1);

        for ($i = 0; $i < $count; $i++) {
            $num_reverse += pow(10, ($count - ($i + 1))) * $num_array[$i];
        }

        echo "逆から読むと", $num_reverse, "です。\n";
        do {
            echo "もう一度？<Yes...1／No...0>：";
            $t = trim(fgets(STDIN));
        } while ($t > 1 || $t < 0);
    } while ($t == 1);
    
    
    

    // 整数値を読み込みその値を返却するメソッド
    function readPlusInt() {
        do {
            echo "正の整数値：";
            $a = trim(fgets(STDIN));
        } while ($a <= 0);
        
        return $a;
    }
?>