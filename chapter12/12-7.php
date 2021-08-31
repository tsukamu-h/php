<?php
    require '..\chapter9\9-5.php';

    // 銀行口座クラス
    class TimeAccount extends Account {
        private int $timeBalance;
        
        // コンストラクタ
        public function __construct(String $name, String $no, int $balance, int $timeBalance, Day $day) {
            parent::__construct($name, $no, $balance, $day);
            $this->timeBalance = $timeBalance;
        }

        public function getTimeBalance() {
            return $this->timeBalance;
        }

        // 定期預金を解約して全額を普通預金に移す
        public function cancel() {
            parent::deposit($this->timeBalance);
            $this->timeBalance = 0;
        }

        // $aと$bの普通預金と定期預金残高の合計額を比較した結果を返却するメソッド
        public static function compBalance(Account $a, Account $b) {
            $totalBalanceA = $a instanceof TimeAccount ? ($a->getBalance() + $a->getTimeBalance()) : ($a->getBalance());
            $totalBalanceB = $b instanceof TimeAccount ? ($b->getBalance() + $b->getTimeBalance()) : ($b->getBalance());

            if ($totalBalanceA > $totalBalanceB) {
                return 1;
            } else if ($totalBalanceA < $totalBalanceB) {
                return -1;
            } else {
                return 0;
            }
        }
    }

    $account = new Account("足立幸一", "123456", 500, new Day(2010, 10, 20));
    $timeAccount = new TimeAccount("仲田真二", "654321", 300, 400, new Day(2010, 10, 20));

    echo "足立君と仲田君の預金残高の比較結果です。\n";
    switch (TimeAccount::compBalance($account, $timeAccount)) {
        case 0:
            echo "二人の預金残高は同じ。";
            break;
        case 1:
            echo "足立君のほうが預金残高が多い。";
            break;
        case -1:
            echo "仲田君のほうが預金残高が多い。";
            break;
    }
?>