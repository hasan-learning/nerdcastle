<?php
include_once "Account.php";

class LoanAccount extends Account
{
    private $principleAmount;
    private $interestRate;
    private $noOfInstallment;


    public function getPrincipleAmount()
    {
        return $this->principleAmount;
    }


    public function setPrincipleAmount($principleAmount)
    {
        $this->principleAmount = $principleAmount;
    }


    public function getInterestRate()
    {
        return $this->interestRate;
    }


    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }


    public function getNoOfInstallment()
    {
        return $this->noOfInstallment;
    }


    public function setNoOfInstallment($noOfInstallment)
    {
        $this->noOfInstallment = $noOfInstallment;
    }



    public function disburse(){

    }

}