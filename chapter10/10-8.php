<?php
    
    class Day {
        private int $year = 1;
        private int $month = 1;
        private int $date = 1;
        private static $mdays = [
            [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
            [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
        ];

        // コンストラクタ（引数あり）
        public function __construct(int $year, int $month, int $date) {
            $this->year = $year;
            $this->month = self::adjustedMonth($month);
            $this->date = self::adjustedDay($year, $this->month, $date);
        }

        // コンストラクタ（引数なし）
        /*public function __construct() {
            $this->year = date("Y");
            $this->month = date("m");
            $this->date = date("d");
        }*/

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
            $this->date = $this->adjustedDay($this->year, $this->month, $this->date);
        }
        public function setMonth(int $month) {
            $this->month = $this->adjustedMonth($month);
            $this->date = $this->adjustedDay($this->year, $this->month, $this->date);
        }
        public function setDate(int $date) {
            $this->date = $this->adjustedDay($this->year, $this->month, $date);
        }

        public function set(int $year, int $month, int $date) {
            $this->year = $year;
            $this->month = $this->adjustedMonth($month);
            $this->date = $this->adjustedDay($year, $this->month, $date);
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

        // ここから10-8で追加するメソッド

        // ある年がうるう年かどうか判定するクラスメソッド
        public static function isLeap(int $y) {
            return ($y % 4 == 0 && $y % 100 != 0 || $y % 400 == 0);
        }

        // y年m月の日数(28/29/30/31)
        private static function dayOfMonth(int $y, int $m) {
            return self::$mdays[self::isLeap($y) ? 1 : 0][$m - 1];
        }

        // 調整されたm月(1～12の範囲外の値を調整)
        private static function adjustedMonth(int $m) {
            return ($m < 1) ? 1 : ($m > 12 ? 12 : $m);
        }

        // 調整されたy年m月のd日(1～28/29/30/31の範囲外の値を調整)
        private static function adjustedDay(int $y, int $m, int $d) {
            if ($d < 1) {
                return 1;
            }
            $dMax = self::dayOfMonth($y, $m);
            return $d > $dMax ? $dMax : $d;
        }

        // 日付が属する年がうるう年かどうか判定するクラスメソッド
        // 多重定義となっているクラスメソッドを呼び出せないためコメントアウト
        /*public function isLeap(Day $d) {
            return self::isLeap($d->year);
        }*/

        // 年内での経過日数（その年の元旦から数えて何日目であるか）を求めるメソッド
        // あってる？
        public function dayOfYear() {
            $days = $this->date;

            for ($i = 1; $i < $this->month; $i++) {
                $days += self::dayOfMonth($this->year, $i);
            }
            return $days;
        }

        // 年内の残りの日数を求めるメソッド
        public function leftDayOfYear() {
            return 365 + (self::isLeap($this->year) ? 1 : 0) - $this->dayOfYear();
        }

        // 日付dとの前後関係（より前の日付か／同じ日付か／より後ろの日付か）を判定するインスタンスメソッド
        public function compareTo(Day $d) {
            return self::compare($this, $d);
        }

        // 二つの日付の前後関係を判定するクラスメソッド
        public static function compare(Day $d1, Day $d2) {
            if ($d1->year > $d2->year) {
                return 1;
            }
            if ($d1->year < $d2->year) {
                return -1;
            }
            if ($d1->month > $d2->month) {
                return 1;
            }
            if ($d1->month < $d2->month) {
                return -1;
            }

            return ($d1->date > $d2->date) ? 1 : ($d1->date < $d2->date ? -1 : 0);
        }

        // 日付を後ろに一つ進めるメソッド
        public function succeed() {
            if ($this->date < self::dayOfMonth($this->year, $this->month)) {
                $this->date++;
            } else {
                if(++$this->month > 12) {
                    $this->year++;
                    $this->month = 1;
                }
                $d->date = 1;
            }
        }

        // 次の日の日付を返却するメソッド
        public function succeedingDay() {
            $temp = new Day($this->year, $this->month, $this->date);
            $temp->succeed();
            return $temp;
        }

        // 日付を一つ前に戻すメソッド
        public function precede() {
            if ($this->date > 1) {
                $this->date--;
            } else {
                if(--$this->month < 1) {
                    $this->year--;
                    $this->month = 12;
                }
                $this->date = dayOfMonth($this->year, $this->month);
            }
        }

        // 前日の日付を返す
        public function precedingDay() {
            $temp = new Day($this->year, $this->month, $this->date);
            $temp->precede();
            return $temp;
        }

        // 日付をn日後ろに進める
        public function succeedDays($n) {
            if ($n < 0) {
                $this->precedeDays(-$n);
            } else if($n > 0) {
                $this->date += $n;
                while ($this->date > $this->dayOfMonth($this->year, $this->month)) {
                    $this->date -= $this->dayOfMonth($this->year, $this->month);
                    if (++$this->month > 12) {
                        $this->year++;
                        $this->month = 1;
                    }
                }
            }
        }

        // n日後の日付を返す
        public function after(int $n) {
            $temp = new Day($this->year, $this->month, $this->date);
            $temp->succeedDays($n);
            return $temp;
        }

        // 日付をn日前に戻すメソッド
        public function precedeDays(int $n) {
            if ($n < 0) {
                $this->succeedDays(-$n);
            } else if ($n > 0) {
                $this->date -= $n;
                // ここで12月に変わる
                //echo $this->month;
                while ($this->date < 1) {
                    $this->month--;
                    if ($this->month < 1) {
                        $this->year--;
                        $this->month = 12;
                    }
                    $this->date += $this->dayOfMonth($this->year, $this->month);
                    //echo $this->toString();
                }
            }
        }

        // n日前に日付を返却するメソッド
        public function before(int $n) {
            // monthは10月
            $temp = new Day($this->year, $this->month, $this->date);
            // monthは10月
            $temp->precedeDays($n);
            return $temp;
        }
    }
?>