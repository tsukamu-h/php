<?php

    (String) $s1 = NULL;
    (String) $s2 = "";
    (String) $s3 = "ABC";
    (String) $s4 = "ABC";
    (String) $s5 = "ABC";
    $s5 = "XYZ";
 
    echo "文字列s1 = ", $s1, "\n";
    echo "文字列s2 = ", $s2, "\n";
    echo "文字列s3 = ", $s3, "\n";
    echo "文字列s4 = ", $s4, "\n";
    echo "文字列s5 = ", $s5, "\n";
    echo "s3とs4は同じ文字列リテラルを参照", (($s3 == $s4) ? "している。" : "していない。");
?>