<?php
    require_once "SavingsAccount.php";
    require_once "CheckingAccount.php";

    $sv1 = new SavingsAccount();
    $sv1->setName("Hasan");
    $sv1->setNumber( "Sv-02562");
    $sv1->setInterestAmount(340);
    $sv1->deposit(300);
    $sv1->withdraw(1000);

    $chk1 = new CheckingAccount();
    $chk1->setNumber("Chk-9275");
    $chk1->setName("Rimon");
    $chk1->setServiceCharge(34000);
    $chk1->deposit(10002);
    $chk1->withdraw(4000);

    echo $chk1->getBalance(); echo "<br>";
    echo $sv1->getBalance();
