<?php
    require '12-1-1.php';
    
    $a = new ExCar("鈴木太郎", 100, 200, 300, 95.0, new Day(2015, 12, 24));
    $a->move(10, 10);
    $b = cast($a, 'Car');

    // エラー
    //echo "総走行距離", $b->getTotalMileage(), "\n";
    
    $b = cast($b, 'ExCar');

    echo "総走行距離：", $b->getTotalMileage(), "\n";

    // 独自クラスの方宣言をするためのメソッド？
    function cast($obj, $toClass) {
        if (!class_exists($toClass)) {
            return false;
        }
        $length = strlen($toClass);
        $objIn = serialize($obj);
        $objOut = '';
        if (preg_match('/\AO:\d+:\".*?\":(.*?)\z/', $objIn, $matches)) {
            $objOut = sprintf('O:%d:"%s":%s', $length, $toClass, $matches[1]);
        }
        return unserialize($objOut);
    }
?>