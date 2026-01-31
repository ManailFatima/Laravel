<?php


class Account{
    protected $balance;

    public function __construct($balance){
        $this->balance = $balance;
    }

    public function deposit($amount){
        $this-> balance = $this-> balance + $amount;
    }
    public function withdraw($amount){
        $this-> balance = $this-> balance - $amount;
    }   
    public function getBalance(){
        return $this-> balance;
    }

}


class SavingAccount extends account{
    public $interest;

    public function __construct($title, $accountNo,$interest, $balance){
        parent:: __construct($balance);
        $this-> interest = $interest;
    }

    public function deposit($amount){
        $this->balance = $amount * $this->interest;
    }
}

class CurrentAccount extends account{
    
}
   

$savingAccount = new SavingAccount('Manail', '123456789',5, 1000);
$balance = $savingAccount->getBalance();
echo " Balance before interest: " . $balance . "\n";

$savingAccount-> deposit(1000);
echo " Balance after interest: " . $savingAccount->getBalance() . "\n";



//account =new Account(2000);
//$account-> balance = 200;


//account-> deposit(1000);

//$currentBAlance = $account-> getBalance();
//echo "Current Balance: " . $currentBAlance . "\n";


//$account-> withdraw(500);
//$currentBAlance = $account-> getBalance();
//echo "Current Balance after withdrawal: " . $currentBAlance . "\n"; 