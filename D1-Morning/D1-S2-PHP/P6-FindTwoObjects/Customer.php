<?php

class Customer
{
  public $name;
  public $email;
  public $contact;
  public $balance;

  public function __construct($name, $email, $contact)
  {
    $this->name = $name;
    $this->email = $email;
    $this->contact = $contact;
  }

  public function setBalance($balance)
  {
    $this->balance = $balance;
  }
  public function getBalance()
  {
    return $this->salary;
  }
}

?>