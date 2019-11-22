<?php
include "Student.php";
include "Department.php";
include "Course.php";
include "Enrollment.php";

$student1 = new Student("S-9373", "Dolon", "d@mail.com");
$student2 = new Student("S-836", "Rafi", "r@mail.com");
$student3 = new Student("S-2434", "Sufi", "s@mail.com");
$student4 = new Student("S-9735", "Kartik", "k@mail.com");

$dept1 = new Department("CSE", "Computer Sc. & Engineering");
$dept1->studentList = array($student1, $student2, $student3,$student4);

$course1 = new Course("Programming Basics", 3.5);
$course2 = new Course("Jave Basics", 3.5);

$dept1->courseList = array($course1, $course2);

$enr1 = new Enrollment($student2, $course1, "2019, 10, 17");
$enr2 = new Enrollment($student1, $course2, "2019, 10, 13");
$enr3 = new Enrollment($student3, $course2, "2019, 10, 25");

$dept1->enrollmentList = array($enr1, $enr2, $enr3);

foreach ($dept1->enrollmentList as $anEnr){
    echo $anEnr->student->regNo . " " . $anEnr->course->title . " " . $anEnr->enrollmentDate; echo "<br>";
}