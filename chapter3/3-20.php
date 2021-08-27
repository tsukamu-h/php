<?php
    $rand = rand(0, 2);
    $hand;

    switch($rand) {
        case 0:
            $hand = "グー";
            break;
        case 1:
            $hand = "チョキ";
            break;
        case 2:
            $hand = "パー";
            break;
    }
    echo "コンピュータが生成した手：", $hand;
?>