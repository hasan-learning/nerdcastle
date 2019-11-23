<?php
include_once "Account.php";
include_once "CheckingAccount.php";
include_once "SavingAccount.php";
include_once "LoanAccount.php";

$chk1 = new CheckingAccount();
$chk1->deposit(450);
$chk1->withdraw(1000000);

$sv1 = new SavingAccount();
$sv1->setInterestAmount(9900);
$sv1->deposit(300);
$sv1->withdraw(1000);

$ln1 = new LoanAccount();
$ln1->withdraw(1000);