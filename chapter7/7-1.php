<?php
    echo "整数x：";
    function signOf(int $i) {
        if ($i < 0) {
            return -1;
        } else if ($i > 0) {
            return 1;
        }
        return 0;
    }
    
    $n = trim(fgets(STDIN));
    echo signOf($n);

?>