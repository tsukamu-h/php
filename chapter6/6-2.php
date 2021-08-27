<?php
    $array = array();

    for ($i = 0; $i < 5; $i++) {
        $array[$i] = 5 - $i;
    }

    for ($i = 0; $i < count($array); $i++) {
        echo "a[", $i, "] = ", $array[$i], "\n";
    }
?>