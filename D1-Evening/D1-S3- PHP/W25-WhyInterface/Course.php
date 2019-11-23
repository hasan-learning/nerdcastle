<?php
include_once "BasicInfo.php";
include_once "Printing.php";

class Course implements BasicInfo, Printing
{
    private $title;
    private $code;
    private $credit;


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getCode()
    {
        return $this->code;
    }


    public function setCode($code)
    {
        $this->code = $code;
    }


    public function getCredit()
    {
        return $this->credit;
    }


    public function setCredit($credit)
    {
        $this->credit = $credit;
    }


    public function getBasicInfo()
    {
        return $this->title." ".$this->code." ".$this->credit;
    }

    public function prints()
    {
        echo "Printing : Course <br>";
    }

    public function cancelPrinting($jobNo)
    {
        // TODO: Implement cancelPrinting() method.
    }
}