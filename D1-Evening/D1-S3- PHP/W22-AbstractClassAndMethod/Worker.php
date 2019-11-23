<?php


abstract class Worker
{
    private $name;
    private $contactNo;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getContactNo()
    {
        return $this->contactNo;
    }

    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;
    }


    abstract  public function getTotalWage();
}