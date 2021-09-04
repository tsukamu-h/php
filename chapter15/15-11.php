<?php

    class HumanPlayer {
        public function nextHand() {
            do {
                echo "ジャンケンポン!!  0...グー／1...チョキ／2...パー：";
                $hand = trim(fgets(STDIN));
            } while ($hand > 2 || $hand < 0);
            return $hand;
        }
    }

    class ComputerPlayer {
        public function nextHand() {
            return rand(0, 2);
        }
    }

    $hp = new HumanPlayer();
    $cp1 = new ComputerPlayer();
    $cp2 = new ComputerPlayer();

    $hands = ["グー", "チョキ", "パー"];
    $retry;

    do {

        $user = $hp->nextHand();
        $comp1 = $cp1->nextHand();
        $comp2 = $cp2->nextHand();

        echo "コンピュータ１が", $hands[$comp1], "で、コンピュータ２が", $hands[$comp2], "で、あなたは", $hands[$user], "です。\n";

        // 判定
        $r1 = ($user - $comp1 + 3) % 3;
        $r2 = ($user - $comp2 + 3) % 3;

        if ($r1 == 2 && $r2 == 2) {
            echo "あなたの勝ちです。";
        } else if ($r1 == 1 && $r2 == 0) {
            echo "コンピュータ１の勝ちです。";
        } else if ($r1 == 0 && $r2 == 1) {
            echo "コンピュータ２の勝ちです。";
        } else if ($r1 == 0 && $r2 == 2) {
            echo "あなたとコンピュータ１の勝ちです。";
        } else if ($r1 == 2 && $r2 == 0) {
            echo "あなたとコンピュータ２の勝ちです。";
        } else if ($r1 == 1 && $r2 == 1) {
            echo "コンピュータ１と２の勝ちです。";
        } else {
            echo "引分けです。";
        }

        do {
            echo "もう一度？ (0)いいえ (1)はい：";
            $retry = trim(fgets(STDIN));
        } while ($retry != 0 && $retry != 1);
        
    } while ($retry == 1);
    
    

?>