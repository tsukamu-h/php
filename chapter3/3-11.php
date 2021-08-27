<?php
    echo "点数：";
    $stdin = trim(fgets(STDIN));
    if ($stdin > 100 || $stdin < 0){
        echo "不正な点数です。";
    } else if ($stdin >= 80){
        echo "優";
    } else if ($stdin >= 70){
        echo "良";
    } else if ($stdin >= 60){
        echo "可";
    } else {
        echo "不可";
    }
?>