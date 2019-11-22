<?php
include "Student.php";

$studentList = getAllStudent();

foreach ($studentList as $student) {
  echo $student->name; echo "<br>";
}


function getAllStudent()
{
    $student1 = new Student("Latif", "latif@mailbd.com");
    $student2 = new Student("Salam", "S@mail.com");
    $student3 = new Student("Zamil", "z@mail.com");

    $studentList = array($student1, $student2, $student3);

    return $studentList;
}