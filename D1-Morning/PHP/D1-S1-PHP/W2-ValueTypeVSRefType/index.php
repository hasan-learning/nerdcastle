<?php
include "Student.php";

$a = 1;
$b = 2;

$a = $b;
$b = 20;
$a = 10;

$st1 = new Student();
$st1->name = "Zabed";
$st1->cGPA = 3.45;
$st1->ageInYear = 23;

echo $st1->name; echo "<br>";
echo $st1->cGPA; echo "<br>";
echo $st1->ageInYear; echo "<br>";
echo "----"; echo "<br>";

$st2 = $st1;

$st2->name = "Jamil";
$st2->cGPA = 3.75;
$st2->ageInYear = 24;


echo $st1->name; echo "<br>";
echo $st1->cGPA; echo "<br>";
echo $st1->ageInYear; echo "<br>";
echo "----"; echo "<br>";

echo $st2->name; echo "<br>";
echo $st2->cGPA; echo "<br>";
echo $st2->ageInYear; echo "<br>";
echo "----"; echo "<br>";

$st2 = null;

echo $st1->name; echo "<br>";
echo $st1->cGPA; echo "<br>";
echo $st1->ageInYear; echo "<br>";
echo "----"; echo "<br>";

echo $st2->name; echo "<br>";
echo $st2->cGPA; echo "<br>";
echo $st2->ageInYear; echo "<br>";
echo "----"; echo "<br>";
