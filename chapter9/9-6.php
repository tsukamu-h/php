<?php
    require '9-4.php';
    
    // 人間クラス
    class Human {
        private String $name;
        private int  $height;
        private int $weight;
        private Day $birthday;

        // コンストラクタ
        public function __construct(String $name, int $height, int $weight, Day $birthday) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
            $this->birthday = $birthday;
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
        public function getBirthday() {
            return new Day(2000, 12, 31);
        }

        public function gainWeight(int $w) {
            $this->weight += $w;
        }
        public function reduceWeight(int $w) {
            $this->weight -= $w;
        }

        // データ表示
        public function putData() {
            echo "名前：", $this->name, "\n";
            echo "身長：", $this->height, "cm\n";
            echo "体重：", $this->weight, "kg\n";
        }

        // 文字列化
        public function toString() {
            printf("{%s: %dcm %dkg ", $this->name, $this->height, $this->weight);
            printf("%s生まれ}", $this->birthday->toString());
            
        }


    }
?>