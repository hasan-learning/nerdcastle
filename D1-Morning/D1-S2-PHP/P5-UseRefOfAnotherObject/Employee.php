<?php

class Employee
{
  private $id;
  private $name;
  private $email;
  private $salary;

  //Following three data is related to employee salary
  //Instead of repeating these, we should use Salary class here.
  //So, Replace these using Salary class and also getter and setter


  public function getId()
  {
    return $this->id;
  }

  public function setId($id): void
  {
    $this->id = $id;
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

  public function setSalary($salary)
  {
    $this->salary = $salary;
  }
  public function getSalary()
  {
    return $this->salary;
  }

}