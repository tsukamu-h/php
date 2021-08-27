<?php
    echo "何月ですか(1～12)：";
    $n = trim(fgets(STDIN));
    $str = printSeason($n);

    if (strcmp($str, "hoge") != 0) {
        echo "その月の季節は", $str, "です。";
    }

    // 月の季節を表示するメソッド
    function printSeason(int $i) {
        $str = "hoge";
        if ($i >= 3 && $i <= 5) {
            $str = "春";
        } if ($i >= 6 && $i <= 8) {
            $str = "夏";
        } if ($i >= 9 && $i <= 11) {
            $str = "秋";
        } if ($i == 12 || $i == 1 || $i == 2) {
            $str = "冬";
        }
        return $str;
    }
?>