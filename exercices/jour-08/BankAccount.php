<?php
class Bank
{
    // attribut privé
    private float $balance;

    //constructeur
    public function __construct()
    {
        $this->balance = 0;
    }
    // méthode pour déposer
    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "votre solde est de : " . $this->balance . "<br/>";
    }
    // méthodes pour retirer
    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "votre solde est de : " . $this->balance . " après retrait $amount<br/>";
        } else  if ($this->balance > $amount) { //ne pas autoriser de retrait en negatif
        } else {
            echo " solde insuffisant <br/>" . $this->balance . "<br/>";
        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}
$compte = new Bank;

$compte->deposit(400);
$compte->withdraw(100);
$compte->withdraw(500);
