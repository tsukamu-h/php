<?php
    
    class Human {
        private $name;
        private $height;
        private $weight;

        public function __construct($name, $height, $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
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

        public function Profile() {
            echo "名前：$this->name\n";
            echo "身長：$this->height\n";
            echo "体重：$this->weight\n";
        }
    }
    
    $human1 = new Human("鈴木次郎", 170, 60);
    $human1->Profile();

    echo "\n";

    $human2 = new Human("高田龍一", 166, 72);
    $human2->Profile();
?>