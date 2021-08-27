<?php
    // 問題集参照
    echo "何月ですか：";
    $stdin = trim(fgets(STDIN));

    switch($stdin) {
        case 3:
        case 4:
        case 5:
            echo "春";
            break;
        case 6:
        case 7:
        case 8:
            echo "夏";
            break;
        case 9:
        case 10:
        case 11:
            echo "秋";
            break;
        case 12:
        case 1:
        case 2:
            echo "冬";
            break;
        default:
            echo "そんな月はありません。";
            break;
    }
?>