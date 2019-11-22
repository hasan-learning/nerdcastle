<?php


class Enrollment
{
    public $student;
    public $course;
    public $enrollmentDate;

    public function __construct($student, $course, $enrollmentDate)
    {
        $this->student = $student;
        $this->course = $course;
        $this->enrollmentDate = $enrollmentDate;
    }
}