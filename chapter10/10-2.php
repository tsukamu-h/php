<?php
    class Id {
        // クラス変数
        static int $count = 0;

        // インスタンス変数
        private int $id;

        // コンストラクタ
        public function __construct() {
            $this->id = ++self::$count;
        }

        //識別番号を取得
        public function getId() {
            return $this->id;
        }
    }

    $a = new Id();
    $b = new Id();

    echo "aの識別番号：", $a->getId(), "\n";
    echo "bの識別番号：", $b->getId(), "\n";
    echo "Id.counter = ", Id::$count, "\n";
    echo "a.counter = ", $a::$count, "\n";
    echo "b.counter = ", $b::$count, "\n";
?>