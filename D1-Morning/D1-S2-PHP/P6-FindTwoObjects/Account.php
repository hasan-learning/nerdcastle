<?php

class Account
{
  private $accountNumber;
  private $accountType;
  private $balance;
  private $deposit;
  private $withdraw;


  public function setAccountNumber($accountNumber)
  {
    $this->accountNumber = $accountNumber;
  }

  public function setAccountType($accountType)
  {
    $this->accountType = $accountType;
  }

  public function setDeposit($depositAmount)
  {
    $this->deposit = $this->balance + $depositAmount;
  }

  public function setWithdraw($withdrawAmount)
  {
    $this->withdraw = $this->balance - $withdrawAmount;
  }

  public function getBalance(){
    return $this->balance;
  }

}

?>