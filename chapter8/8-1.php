<?php
    
    class Human {
        public $name;
        public $height;
        public $weight;
    }
    
    $human1 = new Human();
    $human1->name = "鈴木次郎";
    $human1->height = 170;
    $human1->weight = 60;

    $human2 = new Human();
    $human2->name = "高田龍一";
    $human2->height = 166;
    $human2->weight = 72;

    echo "名前：$human1->name\n";
    echo "身長：$human1->height\n";
    echo "体重：$human1->weight\n";

    echo "\n名前：$human2->name\n";
    echo "身長：$human2->height\n";
    echo "体重：$human2->weight\n";
?>