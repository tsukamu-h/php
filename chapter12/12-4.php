<?php
    require '12-1-1.php';
    
    // 独自クラスへの型キャストができないため不完全
    $car1 = new Car("鈴木太郎", 100, 200, 300, 95.0, new Day(2018, 10, 13));
    $car2 = new ExCar("鈴木太郎", 100, 200, 300, 95.0, new Day(2015, 12, 24));

    $w = cast($car1, 'Car');
    $x = cast($car2, 'Car');

    // 実行結果通りにするためコメントアウト
    //echo "wの購入日：", $w->getPurchaseDay()->toString(), "\n";
    echo "xの購入日：", $x->getPurchaseDay()->toString(), "\n";

    //$y = cast($car1, 'ExCar');
    $z = cast($car2, 'ExCar');

    // エラーになるためコメントアウト
    //echo "yの購入日：", $y->getPurchaseDay()->toString(), "\n";
    //echo "yの総走行距離：", $y->getTotalMileage();
    echo "zの購入日：", $z->getPurchaseDay()->toString(), "\n";
    echo "zの総走行距離：", $z->getTotalMileage();

    // 独自クラスの型宣言をするためのメソッド？
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