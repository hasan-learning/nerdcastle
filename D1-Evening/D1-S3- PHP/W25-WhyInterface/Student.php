<?php
include_once "BasicInfo.php";
include_once "Printing.php";

class Student implements BasicInfo, Printing
{
    private $name;
    private $email;
    private $regNo;
    private $cGPA;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getRegNo()
    {
        return $this->regNo;
    }
    public function setRegNo($regNo)
    {
        $this->regNo = $regNo;
    }
    public function getCGPA()
    {
        return $this->cGPA;
    }
    public function setCGPA($cGPA)
    {
        $this->cGPA = $cGPA;
    }


    public function getBasicInfo(){
        return $this->name." ".$this->email." ".$this->regNo;
    }

    public function prints(){
        echo "Printing : Student <br>";
    }

    public function cancelPrinting($jobNo)
    {
        // TODO: Implement cancelPrinting() method.
    }
}