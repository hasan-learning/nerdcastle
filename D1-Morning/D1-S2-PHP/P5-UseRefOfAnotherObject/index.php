<?php
include "Employee.php";
include  "Salary.php";
//Create Employee object
$salary = new Salary();
$salary->setBasic(5000);
$salary->setMedicalPercent(2000);
$salary->setConveyancePercent(1000);

$employee = new Employee('Hasan Tareq','hsntareq@gmail.com','php');
$employee->setSalary($salary);

echo '<pre>';
print_r($employee);
echo '</pre>';
//echo $employee->getSalary()->getTotal();
//Set some data
//Create Salary object
//Set salary object with employee object created above
// Show Total Salary

