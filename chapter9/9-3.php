<?php
    require '..\chapter8\8-2.php';

    // 問題集参照
    // 一次元配列の全要素を表示
    function printHumanArray($a) {
        for ($i = 0; $i < count($a); $i++) {
            printf("No.%d %s %dcm %dkg\n", $i, $a[$i]->getName(), $a[$i]->getHeight(), $a[$i]->getWeight());
        }
    }

    // 一次元配列

    // 生成と同時に初期化
    $p = [
        new Human("桑野慎一郎", 170, 70),
        new Human("高原徹也", 160, 59)
    ];

    // 配列と個々のインスタンスを個別に生成
    echo "■配列qの要素数：";
    $index = trim(fgets(STDIN));
    $q = array();
    for ($i = 0; $i < $index; $i++) {
        echo "q[", $i, "]\n";
        echo "名前：";
        $name = trim(fgets(STDIN));
        echo "身長：";
        $height = trim(fgets(STDIN));
        echo "体重：";
        $weight = trim(fgets(STDIN));

        $q[$i] = new Human($name, $height, $weight);
    }

    // 二次元配列

    // 生成と同時に初期化（３行２列）
    $x = [
        [new Human("武田祥平", 175, 52), new Human("橋川智之", 169, 60)],
        [new Human("三宅秀樹", 178, 70), new Human("小林佑介", 172, 61)],
        [new Human("白水裕亮", 168, 59), new Human("田中大喜", 165, 59)]
    ];

    // 配列と個々のインスタンスを個別に生成（凸凹配列）
    echo "■配列yの行数：";
    $row = trim(fgets(STDIN));
    
    $y = array();
    $col = array();
    for ($i = 0; $i < $row; $i++) {
        echo "y[", $i, "]の列数：";
        $col[$i] = trim(fgets(STDIN));
        for ($j = 0; $j < $col[$i]; $j++) {
            echo "y[", $i, "][", $j, "]\n";    
            echo "名前：";
            $name = trim(fgets(STDIN));
            echo "身長：";
            $height = trim(fgets(STDIN));
            echo "体重：";
            $weight = trim(fgets(STDIN));
    
            $y[$i][$j] = new Human($name, $height, $weight);
        }
    }

    // 一次元配列の値の表示
    echo "■配列p\n";
    printHumanArray($p);

    echo "■配列q\n";
    printHumanArray($q);

    // ニ次元配列の値の表示
    echo "■配列x\n";
    for ($i = 0; $i < count($x); $i++) {
        printf("第%d行\n", $i);
        printHumanArray($x[$i]);
    }

    echo "■配列y\n";
    for ($i = 0; $i < count($x); $i++) {
        printf("第%d行\n", $i);
        printHumanArray($y[$i]);
    }
?>