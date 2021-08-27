<?php
    echo "季節を求めます。\n";
    
    do {
        do {
            echo "何月ですか：";
            $month = trim(fgets(STDIN));
        } while ($month <= 0 || $month >= 13);

        if ($month >= 3 && $month <= 5) {
            echo "それは春です。";
        } else if ($month >= 6 && $month <= 8) {
            echo "それは夏です。";
        } else if ($month >= 9 && $month <= 11) {
            echo "それは秋です。";
        } else {
            echo "それは冬です。";
        }

        echo "\nもう一度？ 1...Yes／0...No：";
        $judge = trim(fgets(STDIN));
    } while ($judge == 1);
    
?>