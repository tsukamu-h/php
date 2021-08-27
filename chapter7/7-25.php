<?php
    function arrayRmvOfN($a, int $idx, int $n) {
        $b = array();
        $count = 0;
        if ($idx >= 0 && ($idx + $n) < count($a)) {
            for ($i = 0; $i < $idx; $i++) {
                $b[$count] = $a[$i];
                $count++;
                
            }
            for ($i = $idx; $i <= (count($a) - $idx - $n); $i++) {
                $b[$count] = $a[$i + $n];
                $count++;
            }
            return $b;
        }
    }
    
    echo "要素数：";
    $n = trim(fgets(STDIN));
    $x = array();
    for ($i = 0; $i < $n; $i++) {
        echo "x[", $i, "]：";
        $x[$i] = trim(fgets(STDIN));
    }

    echo "削除する開始のインデックス：";
    $idx = trim(fgets(STDIN));
    echo "削除する要素の個数：";
    $n = trim(fgets(STDIN));

    $y = arrayRmvOfN($x, $idx, $n);
    for ($i = 0; $i < $n; $i++) {
        echo "y[", $i, "] = ", $y[$i], "\n";
    }

?>