<?php
include_once "BasicInfo.php";

class Department implements BasicInfo
{
    private $code;
    private $name;
    private $location;


    public function getCode()
    {
        return $this->code;
    }


    public function setCode($code)
    {
        $this->code = $code;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getLocation()
    {
        return $this->location;
    }


    public function setLocation($location)
    {
        $this->location = $location;
    }



    public function getBasicInfo()
    {
        // TODO: Implement getBasicInfo() method.
    }
}