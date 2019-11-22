<?php


class Course
{
    private $title;
    private $credit;


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title): void
    {
        $this->title = $title;
    }


    public function getCredit()
    {
        return $this->credit;
    }


    public function setCredit($credit): void
    {
        $this->credit = $credit;
    }




    public function __construct($title, $credit)
    {
        $this->title = $title;
        $this->credit = $credit;
    }

}