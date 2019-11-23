<?php
include_once "Worker.php";


class TimeBasedWorker extends Worker
{
    private $totalHoursWorked;
    private $amountPerHour;


    public function getTotalHoursWorked()
    {
        return $this->totalHoursWorked;
    }


    public function setTotalHoursWorked($totalHoursWorked)
    {
        $this->totalHoursWorked = $totalHoursWorked;
    }


    public function getAmountPerHour()
    {
        return $this->amountPerHour;
    }


    public function setAmountPerHour($amountPerHour)
    {
        $this->amountPerHour = $amountPerHour;
    }


    public function getTotalWage()
    {
        return $this->totalHoursWorked * $this->amountPerHour;
    }
}