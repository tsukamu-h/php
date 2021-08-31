<?php
    require '12-1-1.php';
    
    $car = new ExCar("鈴木太郎", 100, 200, 300, 95.0, new Day(2015, 12, 24));
    printf("現在位置：(%.2f, %.2f)\n", $car->getX(), $car->getY());
    printf("残り燃料：%.1fリットル\n", $car->getFuel());
    printf("購 入 日：");
    printf("%s\n", $car->getPurchaseDay()->toString());

    //echo "現在位置：(", $car->getX(), ", ", $car->getY(), ")\n";
    //echo "残り燃料：", $car->getFuel(), "リットル\n";
    //echo "購 入 日：", $car->getPurchaseDay()->toString();
?>