<?php

    echo "文字列s：";
    $str = trim(fgets(STDIN));

    for ($i = 0; $i < strlen($str); $i++) {
        printf("s[%d] = %s %04x\n", $i, substr($str, $i, 1), ord($str[$i]));
    }

?>