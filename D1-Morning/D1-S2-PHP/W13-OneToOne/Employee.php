<?php


class Employee
{
    private $name;
    private $email;
    private $code;
    private $presentAddress;

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


    public function getCode()
    {
        return $this->code;
    }


    public function setCode($code): void
    {
        $this->code = $code;
    }


    public function getPresentAddress()
    {
        return $this->presentAddress;
    }

    public function setPresentAddress($presentAddress): void
    {
        $this->presentAddress = $presentAddress;
    }

    public function __construct($name, $email, $code)
    {
        $this->name = $name;
        $this->email = $email;
        $this->code = $code;
    }


}