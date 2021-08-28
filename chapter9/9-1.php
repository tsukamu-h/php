<?php
    
    class Coordinate {
        private float $x;
        private float $y;
        
        function __construct(float $x, float $y) {
            $this->x = $x;
            $this->y = $y;
        }

        function getX() {
            return $this->x;
        }
        function setX(float $x) {
            $this->x = $x;
        }
        function getY() {
            return $this->y;
        }
        function setY(float $y) {
            $this->y = $y;
        }
        function set(float $x, float $y) {
            $this->x = $x;
            $this->y = $y;
        }
        
    }
?>