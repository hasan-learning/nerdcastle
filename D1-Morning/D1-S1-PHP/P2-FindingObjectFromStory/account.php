<?php


class Account{
  public $accountNo;
  public $balance;
  public $accountType;
  public $accountHolderName;

  public function diposit($givenAmount){
    $this->balance = $this->balance + $givenAmount;
    return $this->balance;
  }

  public function withdraw($requestedAmount){
    $this->balance = $this->balance - $requestedAmount;
    return $this->balance;
  }
}


?>