<?php


class Person
{
  /*
   * data should be private
   *
   * */
    public $firstName;
    public $middleName;
    public $lastName;

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