<?php
    require '..\chapter9\9-4.php';

    // 銀行口座クラス
    class Account {
        private static int $count = 0;
        private String $name;
        private String $no;
        private int $balance;
        private Day $openDay;
        private int $id;

        
        // コンストラクタ
        public function __construct(String $n, String $no, int $z, Day $d) {
            $this->name = $n;
            $this->no = $no;
            $this->balance = $z;
            $this->openDay = new Day($d->getYear(), $d->getMonth(), $d->getDate());
            $this->id = ++self::$count;

            echo "明解銀行での口座開設ありがとうございます。\n";
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
            return new Day($this->openDay->getYear(), $this->openDay->getMonth(), $this->openDay->getDate());
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

        // 識別番号を取得する
        public function getId() {
            return $this->id;
        }
    }

    echo "口座開設数：";
    $n = trim(fgets(STDIN));
    $array = array();

    for ($i = 0; $i < $n; $i++) {
        do {
            // 詳細の方のみ設定できるようにする。
            echo "[0]...簡易 [1]詳細：";
            $a = trim(fgets(STDIN));
        } while (!$a == 1);
    
        echo "口座情報を入力せよ。\n";
        echo "名  義：";
        $name = trim(fgets(STDIN));
        echo "番  号：";
        $no = trim(fgets(STDIN));
        echo "残  高：";
        $balance = trim(fgets(STDIN));
        echo "開設年：";
        $year = trim(fgets(STDIN));
        echo "開設月：";
        $month = trim(fgets(STDIN));
        echo "開設日：";
        $date = trim(fgets(STDIN));
    
        $array[$i] = new Account($name, $no, $balance, new Day($year, $month, $date));
    
        echo "口座基本情報：", $array[$i]->toString(), "\n";
        echo "識別番号：", $array[$i]->getId(), "\n";
        echo "開設日：", $array[$i]->getOpenDay()->toString(), "\n";
    }
    

    
?>