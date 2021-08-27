<?php
    do {
        echo "３桁の正の整数値：";
        $num = trim(fgets(STDIN));
    } while($num < 100 || $num > 999);

    echo $num, "と入力しましたね。";
?>