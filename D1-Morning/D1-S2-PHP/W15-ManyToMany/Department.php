<?php


class Department
{
    private $code;
    private $name;
    private $studentList;
    private $courseList;
    private $enrollmentList;


    public function getCode()
    {
        return $this->code;
    }


    public function setCode($code): void
    {
        $this->code = $code;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getStudentList()
    {
        return $this->studentList;
    }


    public function setStudentList($studentList): void
    {
        $this->studentList = $studentList;
    }


    public function getCourseList()
    {
        return $this->courseList;
    }


    public function setCourseList($courseList): void
    {
        $this->courseList = $courseList;
    }

    public function getEnrollmentList()
    {
        return $this->enrollmentList;
    }

    public function setEnrollmentList($enrollmentList): void
    {
        $this->enrollmentList = $enrollmentList;
    }


    public function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

}