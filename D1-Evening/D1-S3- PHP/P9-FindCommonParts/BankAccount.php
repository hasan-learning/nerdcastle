<?php


class BankAccount
{
    private $bankAccountNo;
    private $accountName;
    private $balance;

    public function getBankAccountNo()
    {
        return $this->bankAccountNo;
    }

    public function setBankAccountNo($bankAccountNo): void
    {
        $this->bankAccountNo = $bankAccountNo;
    }

    public function getAccountName()
    {
        return $this->accountName;
    }

    public function setAccountName($accountName): void
    {
        $this->accountName = $accountName;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }

    public function deposit($amount){
        $this->balance += $amount;
    }

    public function withdraw($amount){
        $this->balance -=$amount;
    }
}