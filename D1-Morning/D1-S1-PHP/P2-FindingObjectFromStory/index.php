<?php

include "account.php";

$account1 = new Account();
$account1->accountNo = '2323221';
$account1->balance = '9999';
$account1->accountType = 'savings';
$account1->accountHolderName = 'Hasan Tareq';
$account1->diposit(1);
$account1->withdraw(999);

echo '<pre>';
print_r($account1);
echo '</pre>';
