<?php
    require '9-6.php';

    $suzuki = new Human("鈴木次郎", 170, 60, new Day(1975, 3, 12));
    $takada = new Human("高田龍一", 166, 72, new Day(1987, 10, 7));

    echo "suzuki = ", $suzuki->toString(), "\n";
    echo "takada = ", $takada->toString();
?>