<?php
include "Employee.php";
include "Address.php";

$employee1 = new Employee("Masud", "m@mail.com", "E-9272");
$add1 = new Address("D3", "1021", "32A", "Pilkhana", "Dhanmondi", "Dhaka");
$employee1->setPresentAddress($add1);

$employee1Address = $employee1->getPresentAddress();
$employee1House = $employee1Address->getHouse();

echo $employee1House; echo "<br>";

$employee2 = new Employee("Rimi", "r@mail.com", "E-8645");
$add2 = new Address("35", "12", "88", "O R Nijam Road", "Sadar","Ctg" );
$employee2->setPresentAddress($add2);

echo $employee2->getPresentAddress()->getDistrict();