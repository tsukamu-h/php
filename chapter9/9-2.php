<?php
    
    class Coordinate {
        private float $x = 0.0;
        private float $y = 0.0;
        
        public function __construct(float $x, float $y) {
            $this->set($x, $y);
        }

        public function getX() {
            return $this->x;
        }
        public function setX(float $x) {
            $this->x = $x;
        }
        public function getY() {
            return $this->y;
        }
        public function setY(float $y) {
            $this->y = $y;
        }
        public function set(float $x, float $y) {
            $this->x = $x;
            $this->y = $y;
        }

        public function equalTo(Coordinate $c) {
            return $this->x == $c->x && $this->y == $c->y;
        }

        public function toString() {
            return "($this->x, $this->y)";
        }
        
    }
?>