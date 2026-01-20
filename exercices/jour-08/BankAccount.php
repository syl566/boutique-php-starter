<?php
class BankAccount
{ 
    // attribut privé
    private $balance;

    //constructeur
    public function construct($account, $balance)
    {
        $this->$account = $account;
        $this->balance = $balance;
    }
    // méthode pour déposer
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        } else {
            echo "Le montant déposer invalid.";
        }
    }
    // méthodes pour retirer
    public function withdraw($amount)
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        } else {
            echo " solde insuffisant.";
        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}
$account = new BankAccount();
$account->withdraw(10);
$account->deposit(50);
echo $account->getBalance();