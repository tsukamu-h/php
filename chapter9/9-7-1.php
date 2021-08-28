<?php
    require '9-7.php';

    $meiji = new Period(new Day(1868, 1, 25), new Day(1912, 7, 30));
    $taisho = new Period(new Day(1912, 7, 30), new Day(1926, 12, 25));
    $shouwa = new Period(new Day(1926, 12, 25), new Day(1989, 1, 7));

    echo "明治 = ", $meiji->toString(), "\n";
    echo "大正 = ", $taisho->toString(), "\n";
    echo "昭和 = ", $shouwa->toString();
?>