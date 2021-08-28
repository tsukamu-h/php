<?php
    // 銀行口座クラスの利用例2
    require '9-5.php';

    echo "口座情報を入力せよ。\n";
    echo "名  義：";
    $name = trim(fgets(STDIN));
    echo "番  号：";
    $no = trim(fgets(STDIN));
    echo "残  高：";
    $balance = trim(fgets(STDIN));
    echo "開設年：";
    $y = (int)trim(fgets(STDIN));
    echo "開設月：";
    $m = (int)trim(fgets(STDIN));
    echo "開設日：";
    $d = (int)trim(fgets(STDIN));
    
    $a = new Account($name, $no, $balance, new Day($y, $m, $d));
    echo "口座基本情報：", $a->toString(), "\n";
    echo "口座開設日：", $a->getOpenDay()->toString();
?>