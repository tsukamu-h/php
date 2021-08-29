<?php
    // 最大値・最小値を求めるユーティリティークラス
    // オーバーロードできないためメソッドの名前を変えて対応
    class MinMax {

        // 二値
        // 最大値
        public static function getMax(int $x, int $y) {
            if ($x > $y) {
                return $x;
            }
            return $y;
        }

        // 最小値
        public static function getMin(int $x, int $y) {
            if ($x < $y) {
                return $x;
            }
            return $y;
        }

        // 三値
        // 最大値
        public static function getMax2(int $x, int $y, int $z) {
            $max = $x;
            if ($max < $y) {
                $max = $y;
            }
            if ($max < $z) {
                $max = $z;
            }
            return $max;
        }

        // 最小値
        public static function getMin2(int $x, int $y, int $z) {
            $min = $x;
            if ($min > $y) {
                $min = $y;
            }
            if ($min > $z) {
                $min = $z;
            }
            return $min;
        }

        // 配列
        // 最大値
        public static function getMax3($x) {
            $max = $x[0];
            for ($i = 1; $i < count($x); $i++) {
                if ($max < $x[$i]) {
                    $max = $x[$i];
                }
            }
            return $max;
        }

        // 配列aの最大値を持つ全要素のインデックスを格納した配列を返却
        public static function getMaxArray($x) {
            $max = self::getMax3($x);
            $array = array();
            $count = 0;
            for ($i = 1; $i < count($x); $i++) {
                if ($max == $x[$i]) {
                    $array[$count++] = $i;
                }
            }
            return $array;
        }

        // 最小値
        public static function getMin3($x) {
            $min = $x[0];
            for ($i = 1; $i < count($x); $i++) {
                if ($min > $x[$i]) {
                    $min = $x[$i];
                }
            }
            return $min;
        }

        // 配列aの最小値を持つ全要素のインデックスを格納した配列を返却
        public static function getMinArray($x) {
            $min = self::getMin3($x);
            $array = array();
            $count = 0;
            for ($i = 1; $i < count($x); $i++) {
                if ($min == $x[$i]) {
                    $array[$count++] = $i;
                }
            }
            return $array;
        }
    }
?>