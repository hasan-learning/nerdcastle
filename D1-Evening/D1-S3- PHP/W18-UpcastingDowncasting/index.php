<?php
    require_once "Account.php";
    require_once "SavingsAccount.php";
    require_once "CheckingAccount.php";


    $chk1 = new CheckingAccount();
    $chk1->deposit(450);
    $chk1->withdraw(1000000);

    $sv1 = new SavingsAccount();
    $sv1->setInterestAmount(9900);
    $sv1->deposit(300);
    $sv1->withdraw(1000);

    //since php is loosly typed programing language.
    // we do not need any upcusting and downcusting