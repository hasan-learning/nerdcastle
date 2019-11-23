<?php


class Person
{
    private $firstName;
    private $middleName;
    private $lastName;
    private $fullName;


    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }


    public function getMiddleName()
    {
        return $this->middleName;
    }


    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }


    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }



    public function getMyFullName(){
        $this->fullName = $this->firstName." ".$this->middleName." ".$this->lastName;
        echo $this->fullName."<br>";
    }

    public function getFullReverseName(){

        $reverseName = "";
        for ($index = strlen($this->fullName) - 1; $index >= 0; $index--) {
            $reverseName = $reverseName . $this->fullName[$index];
        }

        echo $reverseName."<br>";
    }

    public function saveDataInTextFile(){
        //Code for saving data in text file
    }
}