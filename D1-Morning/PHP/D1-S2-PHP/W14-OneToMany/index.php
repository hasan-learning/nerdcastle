<?php
include "Student.php";
include "Department.php";

$student1 = new Student("S-9373", "Dolon", "d@mail.com");
$student2 = new Student("S-836", "Rafi", "r@mail.com");
$student3 = new Student("S-2434", "Sufi", "s@mail.com");
$student4 = new Student("S-9735", "Kartik", "k@mail.com");

$dept1 = new Department("CSE", "Computer Sc. & Engineering");
$dept1->studentList = array($student1, $student2, $student3,$student4);

foreach ($dept1->studentList as $aStudent){
    echo $aStudent->regNo . " " . $aStudent->email . " " . $aStudent->name; echo "<br>";
}