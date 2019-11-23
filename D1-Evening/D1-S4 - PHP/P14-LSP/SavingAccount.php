<?php
include_once "Account.php";


class SavingAccount extends Account
{
    private $interestAmount;

    public function getInterestAmount()
    {
        return $this->interestAmount;
    }

    public function setInterestAmount($interestAmount)
    {
        $this->interestAmount = $interestAmount;
    }

}