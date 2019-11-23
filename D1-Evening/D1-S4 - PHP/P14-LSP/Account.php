<?php


class Account
{
    private $name;
    private $number;
    private $balance;


    public function getBalance()
    {
        return $this->balance;
    }

    protected function setBalance($balance)
    {
        $this->balance = $balance;
    }



    public function deposit($amount){
        $this->balance += $amount;
    }

    public function withdraw($amount){
        $this->balance -= $amount;
    }

}