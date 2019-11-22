<?php


class Department
{
    public $code;
    public $name;
    public $studentList;
    public $courseList;
    public $enrollmentList;

    public function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

}