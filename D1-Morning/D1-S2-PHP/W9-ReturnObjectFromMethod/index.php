<?php
include "Student.php";

$aStudent = getStudent();

echo $aStudent->name;

function getStudent()
{
    $aStudent = new Student();
    $aStudent->name = "Latif";
    $aStudent->email = "latif@mailbd.com";
    $aStudent->regNo = "8363-736-12";
    return $aStudent;
}