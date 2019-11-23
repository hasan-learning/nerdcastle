<?php
include "Customer.php";
include "Account.php";

$account = new Account();
$account->setAccountType('Savings');
//$account->

$customer = new Customer('Hasan','has@gma.com','01928281928');
$customer->setBalance();


//$customer->