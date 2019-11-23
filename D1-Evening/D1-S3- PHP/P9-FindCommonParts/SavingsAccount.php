<?php
include 'BankAccount.php';

class SavingsAccount extends BankAccount
{
    private $interestAmount;

    public function getInterestAmount()
    {
        return $this->interestAmount;
    }

    public function setInterestAmount($interestAmount): void
    {
        $this->interestAmount = $interestAmount;
    }


}