<?php

    // 範囲外例外
    class RangeError extends RuntimeException {
        function __construct($n) {
            parent::__construct("範囲外の値：", $n);
        }
    }

    // 範囲外例外（仮引数）
    class ParameterRangeError extends RangeError {
        function __construct($n) {
            parent::__construct($n);
        }
    }

    // 範囲外例外（返却値）
    class ResultRangeError extends RangeError {
        function __construct($n) {
            parent::__construct($n);
        }
    }


    // $nは１桁か？
    function isValid($n) {
        return $n >= 0 && $n <= 9;
    }

    // １桁の整数aとbの和を求める
    function add($a, $b) {
        if (!isValid($a)) {
            throw new ParameterRangeError($a);
        }
        if (!isValid($b)) {
            throw new ParameterRangeError($b);
        }
        $result = $a + $b;
        if (!isValid($result)) {
            throw new ResultRangeError($result);
        }
        return $result;
    }

    echo "整数a：";
    $a = trim(fgets(STDIN));
    echo "整数b：";
    $b = trim(fgets(STDIN));

    try {
        $str = sprintf("それらの和は%dです。", add($a, $b));
        echo $str;
    } catch (RangeError $e) {
    echo "範囲外例外が発生しました。\n", $e->getMessage(), $e->getCode();
    }

?>