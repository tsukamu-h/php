<?php

    $sum = 0;
    $num_array = array();
    for ($i = 0; $i < count($argv) - 1; $i++) {
        $num_array[$i] = $argv[$i + 1];
    }
    foreach ($num_array as $num) {
        $sum += $num;
    }

    echo "合計は", $sum, "です。";

?>