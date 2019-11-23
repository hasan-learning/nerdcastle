<?php
include_once "Person.php";

$aPerson = new Person();
$aPerson->setFirstName("Fahim");
$aPerson->setMiddleName("Hasan");
$aPerson->setLastName("Rana");

$aPerson->saveDataInTextFile();
$aPerson->getMyFullName();
$aPerson->getFullReverseName();
