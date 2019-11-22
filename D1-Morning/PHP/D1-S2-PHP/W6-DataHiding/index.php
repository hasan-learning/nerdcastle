<?php
include "Account.php";
$myAccount = new Account("Sv-09782", "Ali Hasan");
//$myAccount->balance = 100;

$myAccount->deposit(2000);
$myAccount->withdraw(1200);

echo $myAccount->getBalance();