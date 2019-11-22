<?php

class Person
{
    public $firstName;
    public $middleName;
    public $lastName;

    public function __construct($firstName, $middleName, $lastName)
    {
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
    }

    public function getFullReverseName()
    {
        $fullName = $this->getMyFullName();
        $reverseName = "";
        for ($index = strlen($fullName) - 1; $index >= 0; $index--) {
            $reverseName = $reverseName . $fullName[$index];
        }
        return $reverseName;
    }

    public function getMyFullName()
    {
        return $this->firstName . " " . $this->middleName . " " . $this->lastName;
    }


}