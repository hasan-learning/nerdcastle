<?php


class Enrollment
{
    private $student;
    private $course;
    private $enrollmentDate;


    public function getStudent()
    {
        return $this->student;
    }


    public function setStudent($student): void
    {
        $this->student = $student;
    }


    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }

    public function getEnrollmentDate()
    {
        return $this->enrollmentDate;
    }

    public function setEnrollmentDate($enrollmentDate): void
    {
        $this->enrollmentDate = $enrollmentDate;
    }

    public function __construct($student, $course, $enrollmentDate)
    {
        $this->student = $student;
        $this->course = $course;
        $this->enrollmentDate = $enrollmentDate;
    }
}