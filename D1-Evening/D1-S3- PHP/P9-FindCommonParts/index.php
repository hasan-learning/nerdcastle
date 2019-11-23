<?php
include_once "BankAccount.php";

$sv1 = new SavingsAccount();
$sv1->setAccNo("826-8262-982");
$sv1->setAccountName("Salam Akbar") ;
$sv1->setAccountBalance(3400);
$sv1->getInterestAmount(230);
