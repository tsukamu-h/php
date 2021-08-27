<?php
    // 8-3.phpファイルを読み込む
    require '8-3.php';

    echo "車のデータを入力せよ。\n";
    echo "名      前：";
    $name = trim(fgets(STDIN));
    echo "ナ ン バー：";
    $number = trim(fgets(STDIN));
    echo "車      幅：";
    $width = trim(fgets(STDIN));
    echo "高      さ：";
    $height = trim(fgets(STDIN));
    echo "長      さ：";
    $length = trim(fgets(STDIN));
    echo "タンク容量：";
    $tankage = trim(fgets(STDIN));
    echo "ガソリン量：";
    $fuel = trim(fgets(STDIN));
    echo "燃      費：";
    $sfc = trim(fgets(STDIN));

    $car = new Car($name, $number,
    $width, $height, $length, $tankage, $fuel, $sfc);

    while (true) {
        printf("現在地：(%.2f, %.2f)\n", $car->getX(), $car->getY());
        printf("残り燃料：%.2f\n", $car->getFuel());
        echo "移動しますか[0...No／1...Yes]：";
        if (trim(fgets(STDIN) == 0)) {
            break;
        }

        echo "X方向の移動距離：";
        $dx = trim(fgets(STDIN));

        echo "Y方向の移動距離：";
        $dy = trim(fgets(STDIN));

        if (!$car->getMove($dx, $dy)) {
            echo "燃料不足!!";
        }
    }

?>