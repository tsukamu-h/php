<?php
    echo "整数a：";
    $a = trim(fgets(STDIN));

    echo "整数b：";
    $b = trim(fgets(STDIN));

    echo "整数c：";
    $c = trim(fgets(STDIN));

    // 関数名をminからminiに変更
    function mini(int $a, int $b, int $c) {
        $i = $a;
        if ($i > $b) {
            $i = $b;
        } else if ($i > $c) {
            $i = $c;
        }
        return $i;
    }
    
    
    echo "最小値は", mini($a, $b, $c), "です。";

?>