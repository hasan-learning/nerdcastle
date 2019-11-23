<?php
include_once "Student.php";
include_once "Department.php";
include_once "Course.php";
include_once "BasicInfo.php";

$student1 = new Student();
$student1->setName("Rana");
$student1->setEmail("r@gmail.com");
$student1->setRegNo("8723-273");

$department = new Department();
$department->setCode("EEE");
$department->setLocation("A Building");
$department->setName("Elec...");

$course1 = new Course();
$course1->setCode("EEE-101");
$course1->setTitle("Basic electronics");
$course1->setCredit(3.5);

$basicInfoList = array($student1, $department, $course1);

foreach ($basicInfoList as $basicInfo){
    echo $basicInfo->getBasicInfo(); echo "<br>";
}

//Student s = new Student();
  //          IBasicInfo i = s;
    //        IPrinting p = s;

$printList = array($course1, $student1);
foreach ($printList as $printing){
    $printing->prints();
}


function displayBasicInfo($basicInfo){
    echo $basicInfo->getBasicInfo();
}