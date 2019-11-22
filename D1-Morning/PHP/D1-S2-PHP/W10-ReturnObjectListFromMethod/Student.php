<?php


class Student
{
    public $name;
    public $email;
    public $regNo;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;

    }


}