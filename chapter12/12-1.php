<?php
    require '..\chapter9\9-4.php';
    
    class Car {
        private String $name;
        private int $width;
        private int $height;
        private int $length;
        private float $x;
        private float $y;
        private float $fuel;
        private Day $purchaseDay;
        
        // コンストラクタ
        public function __construct(String $name, int $width, int $height, int $length, float $fuel, Day $purchaseDay) {
            $this->name = $name;
            $this->width = $width;
            $this->height = $height;
            $this->length = $length;
            $this->fuel = $fuel;
            $this->x = $this->y = 0.0;
            $this->purchaseDay = new Day($purchaseDay->getYear(), $purchaseDay->getMonth(), $purchaseDay->getDate());
        }

        public function getX() {
            return $this->x;
        }
        public function getY() {
            return $this->y;
        }
        public function getFuel() {
            return $this->fuel;
        }
        public function getPurchaseDay() {
            return new Day($this->purchaseDay->getYear(), $this->purchaseDay->getMonth(), $this->purchaseDay->getDate());
        }

        // スペックを表示
        public function putSpec() {
            echo "名前：", $this->name, "\n";
            echo "車幅：", $this->width, "mm\n";
            echo "車高：", $this->height, "mm\n";
            echo "車長：", $this->length, "mm\n";
        }

        // X方向にdx・Y方向にdy移動
        public function move(float $dx, float $dy) {
            $dist = sqrt($dx * $dx + $dy * $dy);

            if ($dist > $this->fuel) {
                return false;
            } else {
                $this->fuel -= $dist;
                $this->x += $dx;
                $this->y += $dy;
                return true;
            }
        }
    }

?>