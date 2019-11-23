<?php
    require_once "Account.php";
    require_once "SavingsAccount.php";
    require_once "CheckingAccount.php";

    $chk1 = new CheckingAccount("Saddam", "998.023");
    $chk1->deposit(450);
    $chk1->withdraw(1000000);

    $sv1 = new SavingsAccount("Hasan", "998.028", 4500 );
    $sv1->setInterestAmount(9900);
    $sv1->deposit(300);
    $sv1->withdraw(1000);
