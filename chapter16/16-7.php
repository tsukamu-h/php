<?php

    class MyException extends Exception {}

    // PHPでは例外がスローされないためできない可能性がある。
    function swap($a, $idx1, $idx2) {
        try {
            try {
                $t = $a[$idx1];
                $a[$idx1] = $a[$idx2];
                $a[$idx2] = $t;
                throw new MyException();
                
            } catch (MyException $e) {
                throw new Exception();
            }
        }
         catch (Exception $e) {
            throw new RuntimeException("reverseのバグ？");
        }
            
    }

    function reverse($a) {
        try {
            for ($i = 0; $i < count($a) / 2; $i++) {
                swap($a, $i, count($a) - $i);
            }
        } catch (NullPointerException $e) {
            $e->printStackTrace();
            
        } catch (ArrayIndexOutOfBoundsException $e) {
            
            
        }
    }

    echo "要素数：";
    $num = trim(fgets(STDIN));

    $x = array();

    for ($i = 0; $i < $num; $i++) {
        echo "x[", $i, "] : ";
        $x[$i] = trim(fgets(STDIN));
    }

    try {
        reverse($x);

        echo "要素の並びを反転しました。\n";
        for ($i = 0; $i < $num; $i++) {
            echo "x[", $i, "] = ", $x[$i], "\n";
        }
    } catch (RunTimeException $e) {
        echo "例外         ：", $e->getMessage(), "\n";
        echo "例外の原因   ：", $e;
    }
    

    
?>