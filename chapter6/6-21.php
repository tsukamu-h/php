<?php
    echo "クラス数：";
    $class = trim(fgets(STDIN));

    $array_class = array();
    $array_all = array();
    $sum_class = array();
    $person_class = array();

    for ($i = 0; $i < $class; $i++) {
        $sum_class[$i] = 0;
        echo "\n", ($i + 1), "組の人数：";
        $person_class[$i] = trim(fgets(STDIN));

        for ($j = 0; $j < $person_class[$i]; $j++) {
            echo ($i + 1), "組", ($j + 1), "番の点数：";
            $array_class[$j] = trim(fgets(STDIN));
            $sum_class[$i] += $array_class[$j];
        }
        $array_all[$i] = $array_class;
    }

    echo "\n  組 |   合計   平均\n";
    echo "-----+---------------\n";
    
    for ($i = 0; $i < $class; $i++) {
        echo " ", ($i + 1), "組 |    ", $sum_class[$i], "   ", sprintf('%.1f', $sum_class[$i] / $person_class[$i]), "\n";
    }

    $sum = $sum_class[0] + $sum_class[1];
    $sum_person = $person_class[0] + $person_class[1];

    echo "-----+---------------\n";
    echo "  計 |    ", $sum,  "   ", sprintf('%.1f', $sum / $sum_person);

?>