<?php
    echo "整数：";
    $stdin = trim(fgets(STDIN));

    printf(" 8進数では%oです。\n", $stdin);
    printf("16進数では%xです。\n", $stdin);
?>