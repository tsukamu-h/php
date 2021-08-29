<?php
    class ExId {
        // クラス変数
        private static int $count = 0;
        private static int $num = 1;

        // インスタンス変数
        private int $id;

        // コンストラクタ
        public function __construct() {
            self::$count += self::$num;
            $this->id = self::$count;
        }

        // 識別番号を取得
        public function getId() {
            return $this->id;
        }

        // $numの値を取得
        public static function getNum() {
            return self::$num;
        }

        // $numの値を設定
        public static function setNum(int $n) {
            self::$num = $n;
        }

        // 最後に与えた識別番号を取得
        public static function getMaxId() {
            return self::$count;
        }
    }

    $a = new ExId();
    $b = new ExId();
    $c = new ExId();
    ExId::setNum(4);
    $d = new ExId();
    $e = new ExId();
    $f = new ExId();

    echo "aの識別番号：", $a->getId(), "\n";
    echo "bの識別番号：", $b->getId(), "\n";
    echo "cの識別番号：", $c->getId(), "\n";
    echo "dの識別番号：", $d->getId(), "\n";
    echo "eの識別番号：", $e->getId(), "\n";
    echo "fの識別番号：", $f->getId(), "\n";

    $max = ExId::getMaxId();
    echo "最後に与えた識別番号", $max, "\n";
    echo "次回に与える識別番号", ($max + ExId::getNum()), "\n";
?>