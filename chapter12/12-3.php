<?php
    require '12-1-1.php';
    
    $car = new ExCar("鈴木太郎", 100, 200, 300, 95.0, new Day(2015, 12, 24));
    $car->putSpec();

?>