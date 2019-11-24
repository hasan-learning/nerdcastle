<?php
include_once "Person.php";
include_once "SaveHelper.php";
include_once "PrintHelper.php";

$aPerson = new Person();
$aPerson->setFirstName("Fahim");
$aPerson->setMiddleName("Hasan");
$aPerson->setLastName("Rana");

$saveHelper = new SaveHelper();
$printHelper = new PrintHelper();

$printHelper->printInfo($aPerson->getMyFullName());

$printHelper->printInfo($aPerson->getFullReverseName());

$saveHelper->saveDataInTextFile($aPerson);
