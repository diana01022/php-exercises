<?php

class BankAccount
{
    private $accountNumber;
    private $balance;
    
    public function __construct($accountNumber, $initialBalance)
    {
        if ($initialBalance < 0) {
            throw new Exception("Initial balance cannot be negative");
        }
        
        if (empty($accountNumber)) {
            throw new Exception("Account number is required");
        }
        
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }
    
    public function getBalance()
    {
        return $this->balance;
    }
    
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
}

$account = new BankAccount("ACC001", 1000);
echo $account->getBalance(); // Output: 1000

// This will throw an exception:
// $invalidAccount = new BankAccount("ACC002", -500);