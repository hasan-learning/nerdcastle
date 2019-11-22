<?php
include "Student.php";

$aStudent = new Student();
$aStudent->name = "Rana";
$aStudent->email = "r@mail.com";

update($aStudent);

echo $aStudent->name;

function update($aStudent)
{
   $aStudent->name = "Arif";
   $aStudent->email = "r@mail.com";

    return $aStudent;
}