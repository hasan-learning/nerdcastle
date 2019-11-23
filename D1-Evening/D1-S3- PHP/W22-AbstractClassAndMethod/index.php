<?php
include_once "TimeBasedWorker.php";
include_once "PiecesBasedWorker.php";

$totalWage = 0;

$tWorker = new TimeBasedWorker();
$tWorker->setName("Latif");
$tWorker->setContactNo("082635-926");
$tWorker->setTotalHoursWorked(120);
$tWorker->setAmountPerHour(200);
$totalWage = $tWorker->getTotalWage();

echo  $tWorker->getName() . "<br>Total Wage: ". $totalWage; echo "<br>";

$pWorker = new TimeBasedWorker();
$pWorker->setName("Jamil");
$pWorker->setContactNo("927-70-027");
$pWorker->setTotalHoursWorked(35);
$pWorker->setAmountPerHour(450);
$totalWage = $pWorker->getTotalWage();

echo  $pWorker->getName() . "<br>Total Wage: ". $totalWage; echo "<br>";