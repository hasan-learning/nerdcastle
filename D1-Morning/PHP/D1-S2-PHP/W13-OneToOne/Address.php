<?php


class Address
{
    public $aptNo;
    public $house;
    public $road;
    public $area;
    public $thana;
    public $district;

    public function __construct($aptNo, $house, $road, $area, $thana, $district)
    {
        $this->aptNo = $aptNo;
        $this->house = $house;
        $this->road = $road;
        $this->area = $area;
        $this->thana = $thana;
        $this->district = $district;
    }


}