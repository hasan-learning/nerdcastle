<?php
include "Student.php";

    $st1 = new Student();
    $st1->name = "Nahid";
    $st1->cGPA = 2.75;
    $st1->ageInYear = 15;

    echo "Before: " . $st1->name." ".$st1->cGPA." ".$st1->ageInYear; echo "<br>"; echo "<br>";
    changeTheStudent($st1);
    echo "After: " . $st1->name." ".$st1->cGPA." ".$st1->ageInYear; echo "<br>";


    function changeTheStudent($aStudent)
    {
        $aStudent->name = "Latif";
        $aStudent->cGPA = 3.20;
        $aStudent->ageInYear = 20;
    }
