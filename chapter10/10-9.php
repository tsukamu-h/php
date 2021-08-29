<?php

    // 多重定義できないため、
    // 二つの座標を指定したときのみインスタンスを生成するクラスを作成
    class Point2D {
        private static int $count = 0;
        private int $x = 0;
        private int $y = 0;
        private int $id;

        public function __construct(int $x, int $y) {
            $this->x = $x;
            $this->y = $y;

            $this->id = ++self::$count;
            if (date("d") == $this->id) {
                echo "当たり!!今日", $this->id, "個目の座標が生成されました。";
            }
        }

        public function getX() {
            return $this->x;
        }
        public function getY() {
            return $this->y;
        }

        // 最後に与えた識別番号を取得する
        public static function getCounter() {
            return self::$counter;
        }

        // 文字列表現"(x, y)"を返す
        public function toString() {
            return "($this->x, $this->y)";
        }
    }

    // 以下は確認用のコード
    echo "座標を入力してください。\n";

    $a = array();
    for ($i = 0; $i < 6; $i++) {
        echo "x = ";
        $x = trim(fgets(STDIN));
        echo "y = ";
        $y = trim(fgets(STDIN));
        $a[$i] = new Point2D($x, $y);
    }
    

?>