<?php

    function random() {
        switch (rand(0, 4)) {
            case 0:
                echo "大吉";
                break;
            case 1:
                echo "吉";
                break;
            case 2:
                echo "中吉";
                break;
            case 3:
                echo "小吉";
                break;
            case 4:
                echo "凶";
                break;
        }
    }
    echo "今日は", date("Y年m月d日"), "です。\n";
    echo "今日の運勢は", random(), "です。";

?>