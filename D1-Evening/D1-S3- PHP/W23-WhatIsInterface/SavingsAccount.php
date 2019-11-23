<?php
include_once "BankAccount.php";

class SavingsAccount implements BankAccount
{
    private $accountNo;
    private $balance;
    private $interestAmount;


    public function getAccountNo()
    {
        return $this->accountNo;
    }

    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
    }


    public function getBalance()
    {
        return $this->balance;
    }

    public function getInterestAmount()
    {
        return $this->interestAmount;
    }


    public function setInterestAmount($interestAmount)
    {
        $this->interestAmount = $interestAmount;
    }



    public function calculateInterest(){
        //TODO
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }
}