<?php
    class DateId {
        // クラス変数
        private static int $count = 0;

        // インスタンス変数
        private int $id;

        // コンストラクタ
        public function __construct() {
            if (self::$count < 9) {
                $this->id = date("Ymd") . 0 . ++self::$count;
            } else {
                $this->id = date("Ymd") . ++self::$count;
            }
        }

        // 識別番号を取得
        public function getId() {
            return $this->id;
        }
    }

    $a = new DateId();
    $b = new DateId();
    $c = new DateId();

    echo "今日は", date("Y年m月d日"), "です。\n";
    echo "aの識別番号：", $a->getId(), "\n";
    echo "bの識別番号：", $b->getId(), "\n";
    echo "cの識別番号：", $c->getId(), "\n";
?>