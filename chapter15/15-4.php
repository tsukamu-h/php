<?php

    echo "文字列：";
    $str = trim(fgets(STDIN));

    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        echo $str[$i];
    }
?>