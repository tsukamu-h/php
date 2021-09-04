<?php

    class Calendar {
        // 各月の日数
        static $mday = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        // $year年$month月$day日の曜日を求める
        static function dayOfWeek($year, $month, $day) {
            if ($month == 1 || $month == 2) {
                $year--;
                $month += 12;
            }
            
            
            return ($year + $year / 4 - $year / 100 + $year / 400 + (13 * $month + 8) / 5 + $day) % 7;;
        }

        // 閏年かどうか
        function isLeap($year) {
            return $year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0;
        }
        
        // $year年$month月の日数
        function monthDays($year, $month) {
            if ($month-- != 2) {
                return self::$mday[$month];
            }
            return self::$mday[$month] + ($this->isLeap($year) ? 1 : 0);
        }

        // $year年$month月のカレンダーを表示
        function putCalendar($year, $month) {
            $wd = self::dayOfWeek($year, $month, 1);
            $mdays = self::monthDays($year, $month);

            echo " 日 月 火 水 木 金 土\n";
            echo "----------------------\n";

            for ($i = 0; $i < $wd ; $i++) {
                echo "   ";
            }

            for ($i = 1; $i <= $mdays; $i++) {
                printf("%3d", $i);
                if (++$wd % 7 == 0) {
                    echo "\n";
                }
            }
            echo "\n";
        }
    }
    

    $year = 1;
    $month = 1;
    $calendar = new Calendar();

    if (count($argv) == 1) {
        $year = date("Y");
        $month = date("m");
    } else {
        if (count($argv) >= 2) {
            $year = $argv[1];
            if ($year < 0) {
                echo "年の指定が不正です。";
                return;
            }
        }
        if (count($argv) >= 3) {
            $month = $argv[2];
            if ($month < 1 || $month > 12) {
                echo "月の指定が不正です。";
                return;
            }
        }
    }

    if (count($argv) == 1 || count($argv) >= 3) {
        printf("%d年%d月のカレンダー\n", $year, $month);
        $calendar->putCalendar($year, $month);
    } else {
        printf("%d年のカレンダー\n", $year);
        for ($month = 1; $month <= 12; $month++) {
            printf("%d月\n", $month);
            $calendar->putCalendar($year, $month);
            echo "\n";
        }
    }
?>