<?php
    require '10-8.php';

    class DayTester {
        // 日付に関する情報を表示
        static function display(Day $day) {
            echo $day->toString(), "に関する情報\n";
            echo "閏年", (($day->isLeap($day->getYear())) ? "である\n" : "ではない。\n");
            echo "年内経過日数：", $day->dayOfYear(), "\n";
            echo "年内残り日数：", $day->leftDayOfYear(), "\n";
        }

        // 日付を変更
        static function change(Day $day) {
            echo "[1]年月日を変更  [2]年を変更\n";
            echo "[3]月を変更      [4]日を変更\n";
            echo "[5]1日進める     [6]1日戻す\n";
            echo "[7]n日進める     [8]n日戻す：";

            $change = trim(fgets(STDIN));
            $y = 0;
            $m = 0;
            $d = 0;
            $n = 0;
            
            if ($change == 1 || $change == 2) {
                echo "年：";
                $y = trim(fgets(STDIN));
            }
            if ($change == 1 || $change == 3) {
                echo "月：";
                $m = trim(fgets(STDIN));
            }
            if ($change == 1 || $change == 4) {
                echo "日：";
                $d = trim(fgets(STDIN));
            }
            if ($change == 7 || $change == 8) {
                echo "何日：";
                $n = trim(fgets(STDIN));
            }

            switch ($change) {
                case 1:
                    $day->set($y, $m, $d);
                    break;
                case 2:
                    $day->setYear($y);
                    break;
                case 3:
                    $day->setMonth($m);
                    break;
                case 4:
                    $day->setDate($d);
                    break;
                case 5:
                    $day->succeed();
                    break;
                case 6:
                    $day->precede();
                    break;
                case 7:
                    $day->succeedDays($n);
                    break;
                case 8:
                    $day->precedeDays($n);
                    break;
            }
            echo $day->toString(), "に更新されました。\n";
        }

        // 他の日付との比較
        static function compare(Day $day) {
            echo "比較対象の日付を入力せよ。\n";
            echo "年：";
            $y = trim(fgets(STDIN));
            echo "月：";
            $m = trim(fgets(STDIN));
            echo "日：";
            $d = trim(fgets(STDIN));

            $d2 = new Day($y, $m, $d);

            $comp = $day->compareTo($d2);
            echo $day->toString();
            switch ($comp) {
                case -1:
                    echo "のほうが前。\n";
                    break;
                case 1:
                    echo "のほうが後。\n";
                    break;
                case 0:
                    echo "と同じ。\n";
                    break;
            }
        }

        // 前後の日付を求める
        static function beforeAfter(Day $day) {
            echo "[1]翌日  [2]前日  [3]n日後  [4]n日前：";
            $type = trim(fgets(STDIN));
            $n = 0;
            if ($type == 3 || $type == 4) {
                echo "何日：";
                $n = trim(fgets(STDIN));
            }

            echo "それは";
            switch ($type) {
                case 1:
                    echo ($day->succeedingDay())->toString();
                    break;
                case 2:
                    echo ($day->precedingDay())->toString();
                    break;
                case 3:
                    echo ($day->after($n))->toString();
                    break;
                case 4:
                    echo ($day->before($n))->toString();
                    break;
            }
            echo "です。\n";
        }
    }
    
    echo "日付を入力せよ。\n";
    echo "年：";
    $y = trim(fgets(STDIN));
    echo "月：";
    $m = trim(fgets(STDIN));
    echo "日：";
    $d = trim(fgets(STDIN));

    $day = new Day($y, $m, $d);

    while (true) {
        echo "[1]日付に関する情報を表示 [2]日付を変更 [3]他の日付との比較\n[4]前後の日付を求める     [5]終了：";
        $menu = trim(fgets(STDIN));
        if ($menu == 5) {
            break;
        }

        switch ($menu) {
            case 1:
                DayTester::display($day);
                break;
            case 2:
                DayTester::change($day);
                break;
            case 3:
                DayTester::compare($day);
                break;
            case 4:
                DayTester::beforeAfter($day);
                break;
        }
    }
?>