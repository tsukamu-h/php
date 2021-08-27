<?php
    echo "英語の曜日名を小文字で入力してください。\n";

    $week_en = array("sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday");
    $week_ja = array("日", "月", "火", "水", "木", "金", "土");

    $a = 0;

    do {
        do {
            $week_num = rand(1, 7);
        } while ($a == $week_num);

        $a = $week_num;
        
        do {
            echo $week_ja[$week_num - 1], "曜日：";
            $en = trim(fgets(STDIN));
            if (strcmp($week_en[$week_num - 1], $en) != 0) {
                echo "違います。\n";
            }
        } while (strcmp($week_en[$week_num - 1], $en) != 0);
        echo "正解です。もう一度？ 1...Yes／0...No：";
        $t = trim(fgets(STDIN));
    } while ($t == 1);
?>