<?php
    echo "整数a：";
    $a = trim(fgets(STDIN));

    echo "整数b：";
    $b = trim(fgets(STDIN));

    echo "整数c：";
    $c = trim(fgets(STDIN));
    
    function med(int $a, int $b, int $c) {
        $i = $a;
        if ($a >= $b) {
            if ($b >= $c) {
                $i = $b;
            } else {
                ($c >= $a) ? ($i = $a) : ($i = $c);
            }
        } else {
            if ($a >=$c) {
                $i = $a;
            } else {
                ($c > $b) ? ($i = $b) : ($i = $c);
            }
        }
        return $i;
    }
    
    
    echo "中央値は", med($a, $b, $c), "です。";

?>