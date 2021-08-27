<?php
    $array = array();

    for ($i = 0; $i < 5; $i++) {
        $array[$i] = ($i + 1) * 1.1;
    }

    for ($i = 0; $i < count($array); $i++) {
        if ($i == 2) {
            printf("a[%d] = %.16f\n", $i, $array[$i]);
        } else {
            echo "a[", $i, "] = ", $array[$i], "\n";
        }
    }
?>