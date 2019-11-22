<?php

class Circle
{
    public $radius;
    private $pi;
    public $area;
    public $perimeter;
    public $diameter;

    public function __construct($radius)
    {
        $this->radius = $radius;
        $this->pi = pi();
    }


    public function getPi(): float
    {
        return $this->pi;
    }


    function getPerimeter(){
        $perimeter = $this->pi * $this->getDiameter();
        return $perimeter;
    }

    function getArea(){
        $area = $this->pi * $this->radius * $this->radius;
        return $area;
    }

    function getDiameter(){
        $diameter = 2 * $this->radius;
        return $diameter;
    }

}