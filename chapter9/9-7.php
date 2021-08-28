<?php
    require '9-4.php';
    
    class Period {
        private Day $from;
        private Day $to;

        // コンストラクタ
        public function __construct(Day $from, Day $to) {
            $this->from = $from;
            $this->to = $to;
        }

        // 開始日を取得
        public function getFrom() {
            return $this->from;
        }

        // 終了日を取得
        public function getTo() {
            return $this->to;
        }

        // 文字列表現を返却
        public function toString() {
            printf("{");
            printf('%s～', $this->from->toString());
            printf('%s}', $this->to->toString());
            //printf('{%s～%s}', $this->from->toString(), $this->to->toString());

        }
    }
?>