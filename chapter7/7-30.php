<?php
    function mini(...$nums) {
        $min = $nums[0];
        foreach ($nums as $num) {
            if ($min > $num) {
                $min = $num;
            }
        }
        
        return $min;
    }
    
    function printMatrix($x) {
        for ($i = 0; $i < count($x); $i++) {
            for ($j = 0; $j < count($x[$i]); $j++) {
                echo $x[$i][$j], " ";
            }
            echo "\n";
        }
    }
    
    echo "xの値：";
    $x = trim(fgets(STDIN));
    echo "yの値：";
    $y = trim(fgets(STDIN));
    echo "zの値：";
    $z = trim(fgets(STDIN));
    echo "配列aの要素数：";
    $n = trim(fgets(STDIN));

    $a = array();

    for ($i = 0; $i < $n; $i++) {
        printf("a[%d]：", $i);
        $a[$i] = trim(fgets(STDIN));       
    }

    printf("x, yの最小値は%dです。\n", mini($x, $y));
    printf("x, y, zの最小値は%dです。\n", mini($x, $y, $z));
    printf("配列aの最小値は%dです。\n", mini($a));
?>