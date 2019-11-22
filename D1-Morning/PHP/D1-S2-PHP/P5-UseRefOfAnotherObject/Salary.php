<?php


class Salary
{
    private $basic;
    private $conveyancePercent;
    private $medicalPercent;

    public function getBasic()
    {
        return $this->basic;
    }

    public function setBasic($basic): void
    {
        $this->basic = $basic;
    }

    public function getConveyancePercent()
    {
        return $this->conveyancePercent;
    }

    public function setConveyancePercent($conveyancePercent): void
    {
        $this->conveyancePercent = $conveyancePercent;
    }

    public function getMedicalPercent()
    {
        return $this->medicalPercent;
    }

    public function setMedicalPercent($medicalPercent): void
    {
        $this->medicalPercent = $medicalPercent;
    }



    public function getTotal(){
        return $this->basic + $this->getMedicalAmount() + $this->getConveyanceAmount();
    }

    public function getConveyanceAmount(){
        $amount = ($this->basic * $this->conveyancePercent)/100.0;
        return $amount;
    }
    public function getMedicalAmount(){
        $amount = ($this->basic * $this->medicalPercent)/100.0;
        return $amount;
    }
}