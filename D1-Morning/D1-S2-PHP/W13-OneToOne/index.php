<?php
include "Employee.php";
include "Address.php";

$employee1 = new Employee("Masud", "m@mail.com", "E-9272");
$add1 = new Address("D3", "1021", "32A", "Pilkhana", "Dhanmondi", "Dhaka");
$employee1->presentAddress = $add1;

$employee1Address = $employee1->presentAddress;
$employee1House = $employee1->presentAddress->house;
$employee1House = $employee1Address->house;

echo $employee1House; echo "<br>";

$employee2 = new Employee("Rimi", "r@mail.com", "E-8645");
$add2 = new Address("35", "12", "88", "O R Nijam Road", "Sadar","Ctg" );
$employee2->presentAddress = $add2;

echo $employee2->presentAddress->district;