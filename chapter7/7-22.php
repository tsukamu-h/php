<?php
    function arrayClone($a) {
        // 以下のコードでもできた
        // $b = $a;
        $b = array();
        for ($i = 0; $i < count($a); $i++) {
            $b[$i] = $a[$i];
        }
        return $b;
    }
    
    echo "要素数：";
    $n = trim(fgets(STDIN));
    $x = array();
    for ($i = 0; $i < $n; $i++) {
        echo "x[", $i, "]：";
        $x[$i] = trim(fgets(STDIN));
    }

    $y = arrayClone($x);

    echo "配列xの複製yを作りました。\n";
    
    for ($i = 0; $i < count($y); $i++) {
        echo "y[", $i, "] = ", $y[$i], "\n";      
    }
?>