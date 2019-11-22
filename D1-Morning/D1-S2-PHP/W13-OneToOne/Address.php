<?php


class Address
{
    private $aptNo;
    private $house;
    private $road;
    private $area;
    private $thana;
    private $district;


    public function getAptNo()
    {
        return $this->aptNo;
    }


    public function setAptNo($aptNo): void
    {
        $this->aptNo = $aptNo;
    }


    public function getHouse()
    {
        return $this->house;
    }


    public function setHouse($house): void
    {
        $this->house = $house;
    }


    public function getRoad()
    {
        return $this->road;
    }


    public function setRoad($road): void
    {
        $this->road = $road;
    }

    public function getArea()
    {
        return $this->area;
    }

    public function setArea($area): void
    {
        $this->area = $area;
    }


    public function getThana()
    {
        return $this->thana;
    }

    public function setThana($thana): void
    {
        $this->thana = $thana;
    }

    public function getDistrict()
    {
        return $this->district;
    }

    public function setDistrict($district): void
    {
        $this->district = $district;
    }


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