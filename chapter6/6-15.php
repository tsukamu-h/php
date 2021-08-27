<?php
    echo "英語の月名を入力してください。\n";
    echo "なお、先頭は大文字で、２文字目以降は小文字とします。\n";

    $month_en = array("January", "February", "March", "April", "May", "June",
     "July", "August", "September", "October", "November", "December");

    $a = 0;

    do {
        do {
            $month_num = rand(1, 12);
        } while ($a == $month_num);

        $a = $month_num;
        
        do {
            echo $month_num, "月：";
            $en = trim(fgets(STDIN));
            if (strcmp($month_en[$month_num - 1], $en) != 0) {
                echo "違います。\n";
            }
        } while (strcmp($month_en[$month_num - 1], $en) != 0);
        echo "正解です。もう一度？ 1...Yes／0...No：";
        $t = trim(fgets(STDIN));
    } while ($t == 1);
?>