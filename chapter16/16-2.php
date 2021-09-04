<?php
    class Math {
        function mul(int $x, int $y) {
            return $x * $y;
        }
    
        function div(int $x, int $y) {
            return (int)$x / $y;
        }
    
        function muldiv($x, $y) {
            echo "x * y = ", $this->mul($x, $y), "\n";
            echo "x / y = ", $this->div($x, $y);    
        }
    }

    try {
        echo "xの値：";
        $x = trim(fgets(STDIN));
        echo "yの値：";
        $y = trim(fgets(STDIN));
        $math = new Math();
        $math->muldiv($x, $y);
    } catch (TypeError $e) {
        echo "入力エラー発生。", $e;
    } catch (DivisionByZeroError $e) {
        echo "算術エラー発生。", $e;
    } finally {
        echo "プログラムを終了します。";
    }
    
?>