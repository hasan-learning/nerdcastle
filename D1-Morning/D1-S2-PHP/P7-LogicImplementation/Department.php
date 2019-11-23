<?php


class Department
{
    private $code;
    private $name;
    private $studentList;

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code): void
    {
        $this->code = $code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getStudentList()
    {
        return $this->studentList;
    }

    public function setStudentList($studentList): void
    {
        $this->studentList = $studentList;
    }

    public function addStudent($student){

      foreach ($this->studentList as $studentData){
        if($studentData->getRegNo() == $student->getRegNo()){
          return 'Duplicate entry';
        }
      }

      array_push($this->studentList,$student);

      return "Added";

    }


    public function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }

}