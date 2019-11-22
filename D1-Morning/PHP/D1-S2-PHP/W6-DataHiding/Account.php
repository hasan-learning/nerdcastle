<?php


class Account
{
    private $accountNumber;
    private $customerName;
    private $balance;

    public function __construct($accountNumber, $customerName)
    {
        $this->accountNumber = $accountNumber;
        $this->customerName = $customerName;
        $this->balance = 0;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    public function getBalance()
    {
        return $this->balance;
    }


    public function deposit($amount){

        $this->balance = $this->balance+$amount;
        return $amount . " taka has been deposited.";
    }

    public function withdraw($amount){
        if($this->balance - $amount >= 0){
            $this->balance -= $amount;
            return $amount . " taka has been withdrawn.";
        }else{
            return "No sufficient balance";
        }
    }

}