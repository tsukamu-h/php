<?php
    require '12-1.php';

    class ExCar extends Car {
        private float $totalMileage;

        // コンストラクタ
        public function __construct(String $name, int $width, int $height, int $length, float $fuel, Day $purchaseDay) {
            parent::__construct($name, $width, $height, $length, $fuel, $purchaseDay);
            $this->totalMileage = 0;
        }

        // X方向にdx・Y方向にdy移動
        public function move(float $dx, float $dy) {
            $dist = sqrt($dx * $dx + $dy * $dy);

            if (!parent::move($dx, $dy)) {
                return false;
            } else {
                $this->totalMileage += $dist;
                return true;
            }
        }

        // 総走行距離を調べるメソッド
        public function getTotalMileage() {
            return $this->totalMileage;
        }

        // スペックを表示
        public function putSpec() {
            parent::putSpec();
            printf("総走行距離：%.2fkm\n", $this->totalMileage);
        }
    }

?>