<?php


class Item
{
    private $code;
    private $name;
    private $unitPrice;

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

       public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }



    public function __construct($code, $name, $unitPrice)
    {
        $this->code = $code;
        $this->name = $name;
        $this->unitPrice = $unitPrice;
    }

}