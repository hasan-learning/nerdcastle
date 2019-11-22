<?php


class Student
{
    public $regNo;
    public $name;
    public $email;

    /**
     * Student constructor.
     * @param $name
     * @param $regNo
     * @param $email
     */
    public function __construct($regNo, $name, $email)
    {
        $this->name = $name;
        $this->regNo = $regNo;
        $this->email = $email;
    }


}