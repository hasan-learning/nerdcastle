<?php
include "Student.php";
include "Result.php";

$aStudent = new Student();
$aStudent->name = "Jamil";
$aStudent->email = "j@mail.com";

$myResult = new Result();
$myResult->grade = "A+";
$myResult->publishedYear = 2018;

$aStudent->resultSheet = $myResult;
$aResult = $aStudent->resultSheet;
