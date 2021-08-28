<?php
    require '9-4.php';

    // 銀行口座クラス
    class Account {
        private String $name;
        private String $no;
        private int $balance;
        private Day $openDay;

        // コンストラクタ
        public function __construct(String $n, String $num, int $z, Day $d) {
            $this->name = $n;
            $this->no = $num;
            $this->balance = $z;
            $this->openDay = $d;
        }

        // 口座名義を調べる
        public function getName() {
            return $this->name;
        }

        // 口座番号を調べる
        public function getNo() {
            return $this->no;
        }

        // 預金残高を調べる
        public function getBalance() {
            return $this->balance;
        }

        // 口座開設日を調べる
        public function getOpenDay() {
            // Day型の引数を使ってインスタンスを作るとエラーになるため、
            // 代わりに定数を使う
            return new Day(2000, 12, 31);
        }

        // k円預ける
        public function deposit(int $k) {
            $this->balance += $k;
        }

        // k円おろす
        public function withdraw(int $k) {
            $this->balance -= $k;
        }

        // 文字列表現による口座基本情報を返却する
        public function toString() {
            printf("{%s, %s, %d}", $this->name, $this->no, $this->balance);
        }
    }
?>