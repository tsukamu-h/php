<?php
    echo "左下直角の二等辺三角形を表示します。\n";
    echo "段数は：";
    $n = trim(fgets(STDIN));
    for ($i = 1; $i <= $n; $i++) {
        putStars($i);
        echo "\n";
    }

    // 文字cをn個だけ連続表示するメソッド
    function putChars(string $a, int $b) {
        for($i = 0; $i < $b; $i++) {
            echo $a;
        }
    }

    // 文字*をn個だけ連続表示するメソッド
    function putStars(int $c) {
        putChars("*", $c);
    }
?>