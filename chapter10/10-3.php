<?php
    class Id {
        // クラス変数
        private static int $count = 0;

        // インスタンス変数
        private int $id;

        // コンストラクタ
        public function __construct() {
            $this->id = ++self::$count;
        }

        // 識別番号を取得
        public function getId() {
            return $this->id;
        }

        // 最後に与えた識別番号を取得
        public static function getMaxId() {
            return self::$count;
        }      
    }

    $a = new Id();
    $b = new Id();

    echo "aの識別番号：", $a->getId(), "\n";
    echo "bの識別番号：", $b->getId(), "\n";
    echo "最後に与えた識別番号", Id::getMaxId(), "\n";
    echo "最後に与えた識別番号", $a::getMaxId(), "\n";
    echo "最後に与えた識別番号", $b::getMaxId(), "\n";
?>