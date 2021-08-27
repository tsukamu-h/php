<?php
    $pi = 3.1416;
    
    echo "級の表面積を体積を求めます。\n";
    echo "半径：";
    $r = trim(fgets(STDIN));
    
    printf("表面積は%.13fです。\n", (4 * $pi * $r * $r));
    printf("体  積は%.12fです。\n", (4 / 3 * $pi * $r * $r * $r));
?>