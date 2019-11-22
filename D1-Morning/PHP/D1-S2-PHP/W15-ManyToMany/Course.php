<?php


class Course
{
    public $title;
    public $credit;

    public function __construct($title, $credit)
    {
        $this->title = $title;
        $this->credit = $credit;
    }

}