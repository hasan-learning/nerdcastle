<?php


class Student
{
    private $regNo;
    private $name;
    private $email;

    public function getRegNo()
    {
        return $this->regNo;
    }

    public function setRegNo($regNo): void
    {
        $this->regNo = $regNo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }



    public function __construct($regNo, $name, $email)
    {
        $this->name = $name;
        $this->regNo = $regNo;
        $this->email = $email;
    }


}