<?php
    
    class Day {
        private int $year = 1;
        private int $month = 1;
        private int $date = 1;

        // コンストラクタ
        public function __construct(int $year, int $month, int $date) {
            $this->year = $year;
            $this->month = $month;
            $this->date = $date;
        }

        // 年・月・日を取得
        public function getYear() {
            return $this->year;
        }
        public function getMonth() {
            return $this->month;
        }
        public function getDate() {
            return $this->date;
        }

        // 年・月・日を設定
        public function setYear(int $year) {
            $this->year = $year;
        }
        public function setMonth(int $month) {
            $this->month = $month;
        }
        public function setDate(int $date) {
            $this->date = $date;
        }

        public function set(int $year, int $month, int $date) {
            $this->year = $year;
            $this->month = $month;
            $this->date = $date;
        }

        // 曜日を求める
        public function dayOfWeek() {
            $y = $this->year;
            $m = $this->month;
            if ($m == 1 || $m == 2) {
                $y--;
                $m += 12;
            }
            return ($y + $y / 4 - $y / 100 + $y / 400 + (13 * $m + 8) / 5 + $this->date) % 7;
        }

        // 日付dと等しいか
        public function equalTo($d) {
            return $this->year == $d->year && $this->month == $d->month && $this->date == $d->date;
        }

        // 文字列表現を返却
        public function toString() {
            $wd = ["日", "月", "火", "水", "木", "金", "土"];
            $w = $wd[$this->dayOfWeek()];
            printf('%04d年%02d月%02d日(%s)', $this->year, $this->month, $this->date, $w);
        }
    }
?>