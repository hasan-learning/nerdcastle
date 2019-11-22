<?php


class Employee
{
    public $name;
    public $email;
    public $code;
    public $presentAddress;

    public function __construct($name, $email, $code)
    {
        $this->name = $name;
        $this->email = $email;
        $this->code = $code;
    }


}