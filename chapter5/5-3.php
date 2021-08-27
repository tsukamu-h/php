<?php
    echo "変数xはfloat型で、変数yはdouble型です。\n";
    echo "x ：";
    $x = (float)trim(fgets(STDIN));
    echo "y ：";
    $y = (double)trim(fgets(STDIN));

    echo "x = ", $x, "\n";
    echo "y = ", $y;
?>