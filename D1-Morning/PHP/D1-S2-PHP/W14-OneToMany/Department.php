<?php


class Department
{
    public $code;
    public $name;
    public $studentList;


    public function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

}