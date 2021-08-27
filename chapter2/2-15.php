<?php
    $stdin = trim(fgets(STDIN));
    var_dump($stdin);
    
    echo "住所：";
    $stdin1 = trim(fgets(STDIN));
    var_dump($stdin1);
    echo "お住まいは", $stdin1, "ですね。";
?>