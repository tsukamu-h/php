<?php
    
    class Car {
        private String $name;
        private String $number;
        private int $width;
        private int $height;
        private int $length;
        private float $x;
        private float $y;
        private float $tankage;
        private float $fuel;
        private float $sfc;

        public function __construct(String $name, String $number,
         int $width, int $height, int $length, float $tankage, float $fuel, float $sfc) {
            $this->name =$name;
            $this->number =$number;
            $this->width =$width;
            $this->height =$height;
            $this->length =$length;
            $this->tankage =$tankage;
            $this->fuel = ($fuel <= $tankage) ? $fuel : $tankage;
            $this->sfc = $sfc;
            $this->x = 0.0;
            $this->y = 0.0;
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
        public function putSpec() {
            echo "名    前：", $this->name, "\n";
            echo "ナンバー：", $this->number, "\n";
            echo "車    幅：", $this->width, "mm\n";
            echo "車    高：", $this->height, "mm\n";
            echo "車    長：", $this->length, "mm\n";
            echo "タ ン ク：", $this->tankage, "リットル\n";
            echo "燃    費：", $this->sfc, "km／リットル\n";
        }
        public function getMove(float $dx, float $dy) {
            $dist = (double)sqrt($dx * $dx + $dy * $dy);
            $f = (double)($dist / $this->sfc);

            if ($f > $this->fuel) {
                return false;
            } else {
                $this->fuel -= $f;
                $this->x += $dx;
                $this->y += $dy;
                return true;
            }
        }
        public function refuel(float $df) {
            if ($df > 0) {
                $this->fuel += $df;
                if ($fuel > $tankage) {
                    $fuel = $tankage;
                }
            }
        }
    }
?>