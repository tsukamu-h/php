<?php;
    echo "姓：";
    $stdin1 = trim(fgets(STDIN));
    var_dump($stdin1);
    echo "名：";
    $stdin2 = trim(fgets(STDIN));
    echo "こんにちは", $stdin1, $stdin2, "さん。";
?>