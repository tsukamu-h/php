<?php

    class MyException extends Exception {}

    // 前回の日付・時刻を読み込む
    function init() {
        $br = null;
        try {
            $filename = "LastTime.txt";
            $fp = fopen($filename, 'r');
            $txt = fgets($fp);
            if ($txt == "") {
                throw new MyException();
            }
            echo "前回の時刻は" . $txt . "でした。\n";
            fclose($fp);
        // 例外の種類が違うはず
        } catch (MyException $e) {
            echo "このプログラムを実行するのは初めてですね。";
        } finally {
            if ($br != null) {
                try {
                    $br.close();
                } catch (IOException $e) {
                    echo "ファイルクローズ失敗。";
                }
            }
        }
    }

    // 現在の日付・時刻を読み込む
    function term() {
        $fw = null;

        try {
            $filename = "LastTime.txt";
            $fp = fopen($filename, 'w');
            fwrite($fp, sprintf("%04d年%02d月%02d日%02d時%02d分%02d秒",
                                 date("Y"), date("m"), date("d"), date("H"), date("i"), date("s")));
            
            
        } catch (IOException $e) {
            echo "エラー発生!!";
        } finally {
            if ($fw != null) {
                try {
                    fclose($fp);
                } catch (IOException $e) {
                    echo "ファイルクローズ失敗。";
                }
            }
        }
    }

    init();
    term();  
?>