<?php
    require '10-1.php';

    $suzuki = new Human("鈴木次郎", 170, 60);
    $takada = new Human("高田龍一", 166, 72);

    $suzuki->putData();
    echo "番号：", $suzuki->getId(), "\n";

    echo "\n";

    $takada->putData();
    echo "番号：", $takada->getId();
?>