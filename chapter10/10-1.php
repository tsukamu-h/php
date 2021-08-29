<?php
    
    class Human {
        // クラス変数
        private static int $count = 0;

        // インスタンス変数
        private String $name;
        private int $height;
        private int $weight;
        private int $id;

        // コンストラクタ
        public function __construct(String $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            $this->id = ++self::$count;
        }

        public function getName() {
            return $this->name;
        }
        public function getHeight() {
            return $this->height;
        }
        public function getWeight() {
            return $this->weight;
        }
        public function getId() {
            return $this->id;
        }

        // データ表示
        public function putData() {
            echo "名前：", $this->name, "\n";
            echo "身長：", $this->height, "cm\n";
            echo "体重：", $this->weight, "kg\n";
        }
    }
?>