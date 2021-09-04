<?php

    $r = $argv[1];
    printf("半径%.2fの円周は%.2fで面積は%.2fです。", $r, 2 * $r * pi(), $r * $r * pi());   

?>