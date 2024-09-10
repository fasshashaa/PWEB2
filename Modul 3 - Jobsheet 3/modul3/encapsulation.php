<?php
/*
Nama : Fassha Fanny Purwanto
Kelas : TI - 2B
NPM : 230202035 */

//mendefinisikan class BankAccount
class BankAccount {

    //Atribut Private
    private $balance;

    //Function Construct
    public function __construct($balance) {
        $this->balance = $balance;
    }

    //method menambah saldo
    public function deposit($amount) {
        //pengecekan jumlah > 0
        if ($amount > 0) {
            $this->balance += $amount;
            
        }
    }

    //method penarikan 
    public function withdraw($amount) {
        //pengecekan jumlah > 0 tapi tidak melebihi saldo
        if($amount > 0 && $amount <= $this->balance) {
            //mengurangi jumlah saldo
            $this->balance -= $amount;
        }
    }
    //method saldo saat ini
    public function getBalance() {
        return $this->balance;
    }
}

//instansiasi objek
$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
echo "Current Balance : " .$account->getBalance();
?>