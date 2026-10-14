<?php

class BankAccount
{
    public $balance = 0;
    
    public function deposit($amount)
    {
        $this->balance += $amount;
        return "Deposited: $" . $amount;
    }
    
    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrew: $" . $amount;
        }
        return "Insufficient funds";
    }
    
    public function getBalance()
    {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
$account->deposit(50);
echo $account->getBalance(); // Output: 150
$account->withdraw(30);
echo $account->getBalance(); // Output: 120