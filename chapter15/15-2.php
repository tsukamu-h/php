<?php

    $c = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
    (String) $s1 = "ABC";
    (String) $s2 = $c[1] . $c[3] . $c[5] . $c[7] . $c[9];

    // エラー
    //(String) $s2 = new String();
    //(String) $s3 = new String($c);
    //(String) $s4 = new String($c, 5, 3);
    //(String) $s5 = new String("XYZ");

    echo "文字列：";
    $s3 = trim(fgets(STDIN));
    
    echo "s1 = ", $s1, "\n";
    echo "s2 = ", $s2, "\n";
    echo "s3 = ", $s3, "\n";

    // エラー
    //echo "s3 = ", $s3, "\n";
    //echo "s4 = ", $s4, "\n";
    //echo "s5 = ", $s5, "\n";
    
?>